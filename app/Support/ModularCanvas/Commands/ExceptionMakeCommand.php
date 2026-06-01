<?php

declare(strict_types=1);

namespace App\Support\ModularCanvas\Commands;

use App\Support\ModularCanvas\Concerns\ConfiguresCanvasPresets;
use App\Support\ModularCanvas\Concerns\UsesStandardCanvasGenerator;
use InterNACHI\Modular\Console\Commands\Make\MakeException as ModularMakeException;
use Override;

class ExceptionMakeCommand extends ModularMakeException
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
