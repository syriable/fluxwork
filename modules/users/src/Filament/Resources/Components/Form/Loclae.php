<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Form;

use Filament\Forms\Components\Select;

class Locale
{
    public static function make(): Select
    {
        return Select::make('locale')
            ->required()
            ->string()
            ->searchable()
            ->options([
                'en' => 'English',
                'fr' => 'French',
                'de' => 'German',
                'es' => 'Spanish',
                'it' => 'Italian',
                'pt' => 'Portuguese',
                'ru' => 'Russian',
                'zh' => 'Chinese',
            ])
            ->default(config('app.locale'));
    }
}
