<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Form;

use Filament\Forms\Components\TextInput;

class ConfirmPassword
{
    public static function make(): TextInput
    {
        return TextInput::make('password_confirmation')
            ->required()
            ->password()
            ->autocomplete('new-password')
            ->revealable()
            ->dehydrated(false)
            ->visible(fn ($operation) => $operation === 'create')
            ->maxLength(255);
    }
}
