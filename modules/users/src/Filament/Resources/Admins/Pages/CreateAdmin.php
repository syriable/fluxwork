<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Users\Filament\Resources\Admins\AdminResource;

class CreateAdmin extends CreateRecord
{
    protected static string $resource = AdminResource::class;
}
