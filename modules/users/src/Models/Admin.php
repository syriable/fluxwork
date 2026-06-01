<?php

declare(strict_types=1);

namespace Modules\Users\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Users\Database\Factories\AdminFactory;
use Modules\Users\States\AccountState;

#[Fillable(['username', 'display_name', 'email', 'password', 'suspended_at', 'suspension_reason', 'last_login_at', 'last_login_ip'])]
#[Hidden('password', 'remember_token')]
class Admin extends User
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
}
