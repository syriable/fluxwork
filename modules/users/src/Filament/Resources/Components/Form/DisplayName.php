<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Form;

use Filament\Forms\Components\TextInput;

class DisplayName
{
    public static function make(): TextInput
    {
        return TextInput::make('display_name')
            ->required()
            ->string()
            ->maxLength(255);
    }
}
