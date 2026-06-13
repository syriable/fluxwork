<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins\Schemas;

use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Modules\Users\Filament\Resources\Components\Form;

class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->key('details')
                    ->schema([
                        Grid::make()
                            ->columns(3)
                            ->schema([
                                Form\Username::make(),
                                Form\DisplayName::make(),
                                Form\Email::make(),
                                Form\Locale::make(),
                                Form\Timezone::make(),
                                Form\AccountState::make(),
                                Form\Password::make(),
                                Form\ConfirmPassword::make(),
                            ]),
                    ]),
            ]);
    }
}
