<?php

declare(strict_types=1);

namespace App\Support\Actions;

use App\Support\UnicodeSlug;
use Spatie\Sluggable\SlugOptions;

class GenerateSlugAction extends \Spatie\Sluggable\Actions\GenerateSlugAction
{
    #[\Override]
    public function slugifySource(string $source, SlugOptions $options): string
    {
        return UnicodeSlug::make($source, $options->slugSeparator);
    }
}
