<?php

declare(strict_types=1);

namespace App\Support\ModularCanvas\Commands;

use App\Support\ModularCanvas\Concerns\ConfiguresCanvasPresets;
use App\Support\ModularCanvas\Concerns\UsesCanvasTestGenerator;
use InterNACHI\Modular\Console\Commands\Make\MakeComponent as ModularMakeComponent;
use Override;

class ComponentMakeCommand extends ModularMakeComponent
{
    use ConfiguresCanvasPresets;
    use UsesCanvasTestGenerator;

    #[Override]
    protected function configure(): void
    {
        parent::configure();

        $this->configureCanvasPresets();
    }
}
