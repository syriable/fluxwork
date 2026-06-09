<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Buyers\Pages;

use Filament\Actions\DeleteAction;
use Modules\Users\Filament\Resources\Buyers\BuyerResource;
use Syriable\Filament\Plugins\Translator\Filament\Resources\Resource\Pages\TranslatableEditRecord;

class EditBuyer extends TranslatableEditRecord
{
    protected static string $resource = BuyerResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
