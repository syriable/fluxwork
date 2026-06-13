<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Form;

use Filament\Forms\Components\TextInput;

class Email
{
    public static function make(): TextInput
    {
        return TextInput::make('email')
            ->required()
            ->email()
            ->maxLength(255)
            ->unique(ignoreRecord: true);
    }
}
