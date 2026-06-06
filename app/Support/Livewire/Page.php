<?php

declare(strict_types=1);

namespace App\Support\Livewire;

use Filament\Schemas\Schema;
use Syriable\Filament\Plugins\Translator\Concerns\ResolvesPageLabels;
use Syriable\Filament\Plugins\Translator\Contracts\TranslatesConventionally;

abstract class Page extends Component implements TranslatesConventionally
{
    use ResolvesPageLabels;

    protected static string $layout = 'layouts.app';

    public function defaultForm(Schema $schema): Schema
    {
        return $schema
            ->statePath('data');
    }
}
