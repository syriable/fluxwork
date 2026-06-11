<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins\Pages;

use Modules\Users\Filament\Resources\Admins\AdminResource;
use Syriable\Filament\Plugins\Translator\Filament\Resources\Resource\Pages\TranslatableCreateRecord;

class CreateAdmin extends TranslatableCreateRecord
{
    protected static string $resource = AdminResource::class;
}
