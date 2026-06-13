<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Table;

use App\Models\User;
use CodeWithDennis\FilamentAdvancedComponents\Filament\Tables\Components\AdvancedTextColumn;
use Filament\Tables\Columns\TextColumn;

class DisplayName
{
    public static function make(): TextColumn
    {
        return AdvancedTextColumn::make('display_name')
            ->sortable()
            ->searchable()
            ->prefixImage(fn (User $record): string => $record->getLastMediaUrl('avatar'))
            ->prefixImageSize(32);
    }
}
