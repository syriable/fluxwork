<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Form;

use Filament\Forms\Components\TextInput;

class Password
{
    public static function make(): TextInput
    {
        return TextInput::make('password')
            ->required()
            ->password()
            ->autocomplete('new-password')
            ->revealable()
            ->confirmed()
            ->visible(fn($operation) => $operation === 'create')
            ->maxLength(255);
    }
}