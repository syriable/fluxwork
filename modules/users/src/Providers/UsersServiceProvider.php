<?php

declare(strict_types=1);

namespace Modules\Users\Providers;

use Filament\Panel;
use Illuminate\Support\ServiceProvider;
use Modules\Users\UsersPlugin;

class UsersServiceProvider extends ServiceProvider
{
    #[\Override]
    public function register(): void
    {
        Panel::configureUsing(function (Panel $panel): void {
            $panel->plugin(UsersPlugin::make());
        });
    }

    public function boot(): void {}
}
