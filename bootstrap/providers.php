<?php

declare(strict_types=1);

use App\Providers\AppServiceProvider;
use App\Providers\Filament\DashboardPanelProvider;
use App\Providers\ModularCanvasServiceProvider;

return [
    AppServiceProvider::class,
    DashboardPanelProvider::class,
    ModularCanvasServiceProvider::class,
];
