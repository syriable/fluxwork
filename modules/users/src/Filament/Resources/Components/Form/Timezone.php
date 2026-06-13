<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Components\Form;

use Filament\Forms\Components\Select;

use function Modules\Users\timezoneList;

class Timezone
{
    public static function make(): Select
    {
        return Select::make('timezone')
            ->required()
            ->string()
            ->searchable()
            ->default(config('app.timezone'))
            ->options(timezoneList());
    }
}
