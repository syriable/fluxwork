<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins\Pages;

use Filament\Actions\DeleteAction;
use Modules\Users\Filament\Resources\Admins\AdminResource;
use Syriable\Filament\Plugins\Translator\Filament\Resources\Resource\Pages\TranslatableEditRecord;

class EditAdmin extends TranslatableEditRecord
{
    protected static string $resource = AdminResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
