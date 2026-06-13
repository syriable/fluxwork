<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Form;

use Filament\Forms\Components\TextInput;

class Username
{
    public static function make(): TextInput
    {
        return TextInput::make('username')
            ->required()
            ->string()
            ->maxLength(255)
            ->unique(ignoreRecord: true);
    }
}
