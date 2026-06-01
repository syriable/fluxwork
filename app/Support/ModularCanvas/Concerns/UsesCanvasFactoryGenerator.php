<?php

declare(strict_types=1);

namespace App\Support\ModularCanvas\Concerns;

use Orchestra\Canvas\Core\Concerns\ResolvesPresetStubs;

use function Orchestra\Sidekick\Filesystem\join_paths;

trait UsesCanvasFactoryGenerator
{
    use ResolvesPresetStubs;
    use UsesStandardCanvasGenerator;

    protected function resolveDefaultStubPath(string $stub): string
    {
        return join_paths(base_path('vendor/orchestra/canvas/src/Console'), $stub);
    }
}
