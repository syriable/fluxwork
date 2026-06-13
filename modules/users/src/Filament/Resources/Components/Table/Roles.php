<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Table;

use CodeWithDennis\FilamentAdvancedComponents\Filament\Tables\Components\AdvancedTextColumn;
use Filament\Tables\Columns\TextColumn;

class Roles
{
    public static function make(): TextColumn
    {
        return AdvancedTextColumn::make('roles.name')
            ->sortable()
            ->searchable()
            ->badge()
            ->color(fn (string $state): string => match ($state) {
                'admin' => 'success',
                'buyer' => 'info',
                default => 'gray',
            });
    }
}
