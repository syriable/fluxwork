<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Form;

use Filament\Forms\Components\Select;
use Modules\Users\States\Account\Active;
use Modules\Users\States\Account\Suspended;

class AccountState
{
    public static function make(): Select
    {
        return Select::make('account_state')
            ->required()
            ->string()
            ->searchable()
            ->default(Active::class)
            ->options([
                Active::class => 'Active',
                Suspended::class => 'Suspended',
            ]);
    }
}