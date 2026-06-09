<?php

declare(strict_types=1);

namespace Modules\Users\Filament\Resources\Admins\Schemas;

use Filament\Schemas\Schema;

class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
