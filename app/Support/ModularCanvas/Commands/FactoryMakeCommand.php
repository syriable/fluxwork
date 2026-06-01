<?php

declare(strict_types=1);

namespace App\Support\ModularCanvas\Commands;

use App\Support\ModularCanvas\Concerns\ConfiguresCanvasPresets;
use App\Support\ModularCanvas\Concerns\UsesCanvasFactoryGenerator;
use InterNACHI\Modular\Console\Commands\Make\MakeFactory as ModularMakeFactory;
use Override;

class FactoryMakeCommand extends ModularMakeFactory
{
    use ConfiguresCanvasPresets;
    use UsesCanvasFactoryGenerator;

    #[Override]
    protected function configure(): void
    {
        parent::configure();

        $this->configureCanvasPresets();
    }

    /**
     * @return int|bool|null
     */
    #[Override]
    public function handle()
    {
        return $this->generateCode() ? self::SUCCESS : self::FAILURE;
    }
}
