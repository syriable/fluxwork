<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Users\Filament\Resources\Admins\AdminResource;

class EditAdmin extends EditRecord
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
