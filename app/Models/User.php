<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\ModelStates\HasStates;
use Spatie\Permission\Traits\HasRoles;

abstract class User extends Authenticatable implements HasMedia
{
    use HasRoles;
    use HasStates;
    use HasUlids;
    use InteractsWithMedia;
    use Notifiable;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')
            ->useDisk('public')
            ->singleFile();
    }

    #[\Override]
    public function getRouteKeyName(): string
    {
        return 'username';
    }

    public function welcomeNotificationKeyValue(): string
    {
        return $this->username;
    }

    public function preferredLocale(): string
    {
        return $this->locale ?? config('app.locale');
    }

    protected function localeTime(): Attribute
    {
        return Attribute::make(
            get: fn (): string => now($this->timezone)->locale(Auth::user()?->locale)->format('M d, Y, h:i A'),
        );
    }

    public function getGuardName(): string
    {
        return $this->guard_name;
    }

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn (): string => blank($this->first_name) ? $this->username : sprintf('%s %s', $this->first_name, $this->last_name),
        );
    }
}
