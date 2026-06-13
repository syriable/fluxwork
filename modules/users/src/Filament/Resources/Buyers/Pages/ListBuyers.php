<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Buyers\Pages;

use Filament\Actions\CreateAction;
use Modules\Users\Filament\Resources\Buyers\BuyerResource;
use Syriable\Filament\Plugins\Translator\Filament\Resources\Resource\Pages\TranslatableListRecords;

class ListBuyers extends TranslatableListRecords
{
    protected static string $resource = BuyerResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
