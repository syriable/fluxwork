<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins;

use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Modules\Users\Filament\Resources\Admins\Pages\CreateAdmin;
use Modules\Users\Filament\Resources\Admins\Pages\EditAdmin;
use Modules\Users\Filament\Resources\Admins\Pages\ListAdmins;
use Modules\Users\Filament\Resources\Admins\Schemas\AdminForm;
use Modules\Users\Filament\Resources\Admins\Tables\AdminsTable;
use Modules\Users\Models\Admin;
use Syriable\Filament\Plugins\Translator\Filament\Resources\TranslatableResource;

class AdminResource extends TranslatableResource
{
    protected static ?string $model = Admin::class;

    protected static ?string $recordTitleAttribute = 'display_name';

    #[\Override]
    public static function form(Schema $schema): Schema
    {
        return AdminForm::configure($schema);
    }

    #[\Override]
    public static function table(Table $table): Table
    {
        return AdminsTable::configure($table);
    }

    #[\Override]
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    #[\Override]
    public static function getPages(): array
    {
        return [
            'index' => ListAdmins::route('/'),
            'create' => CreateAdmin::route('/create'),
            'edit' => EditAdmin::route('/{record}/edit'),
        ];
    }
}
