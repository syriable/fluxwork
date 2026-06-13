<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Table;

use CodeWithDennis\FilamentAdvancedComponents\Filament\Tables\Components\AdvancedTextColumn;

class AccountState
{
    public static function make(): AdvancedTextColumn
    {
        return AdvancedTextColumn::make('account_state')
            ->sortable()
            ->searchable()
            ->badge();
    }
}
