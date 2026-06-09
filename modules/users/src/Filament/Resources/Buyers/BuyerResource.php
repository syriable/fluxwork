<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Buyers;

use BackedEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Users\Filament\Resources\Buyers\Pages\CreateBuyer;
use Modules\Users\Filament\Resources\Buyers\Pages\EditBuyer;
use Modules\Users\Filament\Resources\Buyers\Pages\ListBuyers;
use Modules\Users\Filament\Resources\Buyers\Schemas\BuyerForm;
use Modules\Users\Filament\Resources\Buyers\Tables\BuyersTable;
use Modules\Users\Models\Buyer;
use Syriable\Filament\Plugins\Translator\Filament\Resources\TranslatableResource;

class BuyerResource extends TranslatableResource
{
    protected static ?string $model = Buyer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'display_name';

    #[\Override]
    public static function form(Schema $schema): Schema
    {
        return BuyerForm::configure($schema);
    }

    #[\Override]
    public static function table(Table $table): Table
    {
        return BuyersTable::configure($table);
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
            'index' => ListBuyers::route('/'),
            'create' => CreateBuyer::route('/create'),
            'edit' => EditBuyer::route('/{record}/edit'),
        ];
    }
}
