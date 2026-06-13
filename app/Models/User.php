<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Concerns\LogsActivity;
use Spatie\Activitylog\Support\LogOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\ModelStates\HasStates;
use Spatie\Permission\Guard;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property string $username
 * @property string $display_name
 * @property string $email
 * @property string|null $locale
 * @property string $timezone
 * @property-read string $name
 * @property-read string $locale_time
 */
abstract class User extends Authenticatable implements HasMedia
{
    use HasRoles;
    use HasStates;
    use HasUlids;
    use InteractsWithMedia;
    use LogsActivity;
    use Notifiable;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll()
            ->logOnlyDirty()
            ->dontLogEmptyChanges();
    }

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

    /**
     * @return Attribute<string, never>
     */
    protected function localeTime(): Attribute
    {
        return Attribute::make(
            get: function (): string {
                $authUser = Auth::user();
                $locale = $authUser instanceof self && filled($authUser->locale)
                    ? $authUser->locale
                    : config('app.locale');

                $date = now($this->timezone);
                $date->locale($locale);

                return $date->format('M d, Y, h:i A');
            },
        );
    }

    public function getGuardName(): string
    {
        return Guard::getDefaultName($this);
    }

    /**
     * @return Attribute<string, never>
     */
    public function name(): Attribute
    {
        return Attribute::make(
            get: fn (): string => $this->display_name,
        );
    }
}
