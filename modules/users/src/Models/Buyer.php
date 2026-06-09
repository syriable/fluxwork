<?php

declare(strict_types=1);

namespace Modules\Users\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Modules\Users\Database\Factories\BuyerFactory;
use Modules\Users\Observers\BuyerObserver;
use Modules\Users\States\AccountState;
use Spatie\Activitylog\Models\Concerns\LogsActivity;
use Spatie\Activitylog\Support\LogOptions;

/**
 * @property AccountState $account_state
 * @property Carbon|null $suspended_at
 * @property string|null $suspension_reason
 */
#[ObservedBy(BuyerObserver::class)]
#[Fillable(['username', 'display_name', 'email', 'password', 'suspended_at', 'suspension_reason', 'last_login_at', 'last_login_ip'])]
#[Hidden('password', 'remember_token')]
class Buyer extends User
{
    /** @use HasFactory<BuyerFactory> */
    use HasFactory;

    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll()
            ->logOnlyDirty()
            ->dontLogEmptyChanges();
    }

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
            'password' => 'hashed',
            'email_verified_at' => 'datetime',
            'suspended_at' => 'datetime',
            'last_login_at' => 'datetime',
        ];
    }

    /**
     * @return Attribute<string, never>
     */
    #[\Override]
    public function name(): Attribute
    {
        return Attribute::make(
            get: fn (): string => $this->display_name,
        );
    }
}
