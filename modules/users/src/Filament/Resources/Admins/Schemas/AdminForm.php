<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->key('details')
                    ->schema([
                        TextInput::make('username')
                            ->required()
                            ->unique(ignoreRecord: true),
                    ]),
            ]);
    }
}
