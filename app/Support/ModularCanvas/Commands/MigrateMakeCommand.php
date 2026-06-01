<?php

declare(strict_types=1);

namespace App\Support\ModularCanvas\Commands;

use App\Support\ModularCanvas\Concerns\ConfiguresCanvasPresets;
use InterNACHI\Modular\Console\Commands\Make\MakeMigration as ModularMakeMigration;
use Orchestra\Canvas\Core\Concerns\CreatesUsingGeneratorPreset;
use Override;

class MigrateMakeCommand extends ModularMakeMigration
{
    use ConfiguresCanvasPresets;
    use CreatesUsingGeneratorPreset;

    #[Override]
    protected function configure(): void
    {
        parent::configure();

        $this->configureCanvasPresets();
    }
}
