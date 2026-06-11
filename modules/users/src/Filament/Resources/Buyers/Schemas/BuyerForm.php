<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Buyers\Schemas;

use Filament\Schemas\Schema;

class BuyerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
