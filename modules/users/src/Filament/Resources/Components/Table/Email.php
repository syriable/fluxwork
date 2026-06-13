<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Table;

use CodeWithDennis\FilamentAdvancedComponents\Filament\Tables\Components\AdvancedTextColumn;
use Filament\Tables\Columns\TextColumn;

class Email
{
    public static function make(): TextColumn
    {
        return AdvancedTextColumn::make('email')
            ->sortable()
            ->searchable()
            ->mailable();
    }
}
