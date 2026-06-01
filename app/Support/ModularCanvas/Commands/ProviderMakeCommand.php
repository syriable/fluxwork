<?php

declare(strict_types=1);

namespace App\Support\ModularCanvas\Commands;

use App\Support\ModularCanvas\Concerns\ConfiguresCanvasPresets;
use App\Support\ModularCanvas\Concerns\UsesStandardCanvasGenerator;
use InterNACHI\Modular\Console\Commands\Make\MakeProvider as ModularMakeProvider;
use Override;

class ProviderMakeCommand extends ModularMakeProvider
{
    use ConfiguresCanvasPresets;
    use UsesStandardCanvasGenerator;

    #[Override]
    protected function configure(): void
    {
        parent::configure();

        $this->configureCanvasPresets();
    }
}
