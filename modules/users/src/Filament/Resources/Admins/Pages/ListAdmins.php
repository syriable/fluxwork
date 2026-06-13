<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins\Pages;

use Filament\Actions\CreateAction;
use Modules\Users\Filament\Resources\Admins\AdminResource;
use Syriable\Filament\Plugins\Translator\Filament\Resources\Resource\Pages\TranslatableListRecords;

class ListAdmins extends TranslatableListRecords
{
    protected static string $resource = AdminResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
