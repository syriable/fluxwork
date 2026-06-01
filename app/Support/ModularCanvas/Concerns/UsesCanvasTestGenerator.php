<?php

declare(strict_types=1);

namespace App\Support\ModularCanvas\Concerns;

use Orchestra\Canvas\Core\Concerns\TestGenerator;

trait UsesCanvasTestGenerator
{
    use TestGenerator;
    use UsesStandardCanvasGenerator;
}
