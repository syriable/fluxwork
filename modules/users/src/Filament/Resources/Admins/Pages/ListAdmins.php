<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Users\Filament\Resources\Admins\AdminResource;

class ListAdmins extends ListRecords
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
