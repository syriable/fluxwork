<?php

declare(strict_types=1);

namespace Modules\Users;

use Filament\Contracts\Plugin;
use Filament\Panel;

class UsersPlugin implements Plugin
{
    public function getId(): string
    {
        return 'users';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function register(Panel $panel): void
    {
        $panel
            ->discoverResources(
                in: __DIR__.'/Filament/Resources',
                for: 'Modules\\Users\\Filament\\Resources',
            )
            ->discoverPages(
                in: __DIR__.'/Filament/Pages',
                for: 'Modules\\Users\\Filament\\Pages',
            )
            ->discoverWidgets(
                in: __DIR__.'/Filament/Widgets',
                for: 'Modules\\Users\\Filament\\Widgets',
            );
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
