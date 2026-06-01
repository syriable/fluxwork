<?php

declare(strict_types=1);

namespace App\Support\ModularCanvas\Concerns;

trait ConfiguresCanvasPresets
{
    protected function configureCanvasPresets(): void
    {
        $this->addGeneratorPresetOptions();
    }
}
