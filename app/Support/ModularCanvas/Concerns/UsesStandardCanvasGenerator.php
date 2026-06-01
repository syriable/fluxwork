<?php

declare(strict_types=1);

namespace App\Support\ModularCanvas\Concerns;

use Orchestra\Canvas\Core\Concerns\CodeGenerator;
use Orchestra\Canvas\Core\Concerns\UsesGeneratorOverrides;

trait UsesStandardCanvasGenerator
{
    use CodeGenerator;
    use UsesGeneratorOverrides;
}
