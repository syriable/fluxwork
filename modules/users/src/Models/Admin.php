<?php

declare(strict_types=1);

namespace Modules\Users\Models;

use App\Models\User;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Users\Database\Factories\AdminFactory;
use Modules\Users\Observers\AdminObserver;
use Modules\Users\States\AccountState;

#[Fillable(['username', 'display_name', 'email', 'password', 'suspended_at', 'suspension_reason', 'last_login_at', 'last_login_ip'])]
#[Hidden('password', 'remember_token')]
#[ObservedBy(AdminObserver::class)]
class Admin extends User implements FilamentUser, HasAvatar, HasName
{
    /** @use HasFactory<AdminFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    #[\Override]
    protected function casts(): array
    {
        return [
            'account_state' => AccountState::class,
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'suspended_at' => 'datetime',
            'last_login_at' => 'datetime',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function getFilamentName(): string
    {
        return $this->display_name;
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->getLastMediaUrl('avatar');
    }
}
