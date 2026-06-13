<?php

declare(strict_types=1);

namespace App\Livewire\Auth\Actions;

use App\Livewire\Auth\Data\LoginData;
use Filament\Notifications\Notification;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginAction
{
    private const int MAX_ATTEMPTS = 5;

    private const int DECAY_SECONDS = 60;

    public function __construct(private readonly Request $request) {}

    public function handle(LoginData $loginData): void
    {
        if ($this->isRateLimited($loginData)) {
            return;
        }

        if (! Auth::attempt($this->credentials($loginData), $loginData->remember)) {
            RateLimiter::hit($this->throttleKey($loginData), self::DECAY_SECONDS);

            throw ValidationException::withMessages([
                'data.email' => __('filament-panels::auth/pages/login.messages.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey($loginData));

        $this->request->session()->regenerate();
    }

    private function isRateLimited(LoginData $loginData): bool
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey($loginData), self::MAX_ATTEMPTS)) {
            return false;
        }

        event(new Lockout($this->request));

        $this->sendRateLimitedNotification(RateLimiter::availableIn($this->throttleKey($loginData)));

        return true;
    }

    /**
     * @return array{email: string, password: string}|array{username: string, password: string}
     */
    private function credentials(LoginData $loginData): array
    {
        if (filter_var($loginData->email, FILTER_VALIDATE_EMAIL)) {
            return [
                'email' => $loginData->email,
                'password' => $loginData->password,
            ];
        }

        return [
            'username' => $loginData->email,
            'password' => $loginData->password,
        ];
    }

    private function throttleKey(LoginData $loginData): string
    {
        return Str::transliterate(Str::lower($loginData->email).'|'.$this->request->ip());
    }

    private function sendRateLimitedNotification(int $secondsUntilAvailable): void
    {
        $replacements = [
            'seconds' => $secondsUntilAvailable,
            'minutes' => (int) ceil($secondsUntilAvailable / 60),
        ];

        Notification::make()
            ->title(__('filament-panels::auth/pages/login.notifications.throttled.title', $replacements))
            ->body($this->rateLimitedNotificationBody($replacements))
            ->danger()
            ->send();
    }

    /**
     * @param  array<string, int>  $replacements
     */
    private function rateLimitedNotificationBody(array $replacements): ?string
    {
        $translations = __('filament-panels::auth/pages/login.notifications.throttled');

        if (! is_array($translations) || ! array_key_exists('body', $translations)) {
            return null;
        }

        $body = __('filament-panels::auth/pages/login.notifications.throttled.body', $replacements);

        return is_string($body) ? $body : null;
    }
}
