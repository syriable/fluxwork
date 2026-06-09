<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Buyers\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Users\Filament\Resources\Buyers\BuyerResource;

class CreateBuyer extends CreateRecord
{
    protected static string $resource = BuyerResource::class;
}
