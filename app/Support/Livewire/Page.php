<?php

declare(strict_types=1);

namespace App\Support\Livewire;

use Filament\Schemas\Schema;

abstract class Page extends Component
{
    protected static string $layout = 'layouts.app';

    public function defaultForm(Schema $schema): Schema
    {
        return $schema
            ->statePath('data');
    }
}
