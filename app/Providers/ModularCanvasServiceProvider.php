<?php

namespace App\Providers;

use App\Support\ModularCanvas\Commands\CastMakeCommand;
use App\Support\ModularCanvas\Commands\ChannelMakeCommand;
use App\Support\ModularCanvas\Commands\ComponentMakeCommand;
use App\Support\ModularCanvas\Commands\ConsoleMakeCommand;
use App\Support\ModularCanvas\Commands\ControllerMakeCommand;
use App\Support\ModularCanvas\Commands\EventMakeCommand;
use App\Support\ModularCanvas\Commands\ExceptionMakeCommand;
use App\Support\ModularCanvas\Commands\FactoryMakeCommand;
use App\Support\ModularCanvas\Commands\JobMakeCommand;
use App\Support\ModularCanvas\Commands\ListenerMakeCommand;
use App\Support\ModularCanvas\Commands\MailMakeCommand;
use App\Support\ModularCanvas\Commands\MiddlewareMakeCommand;
use App\Support\ModularCanvas\Commands\MigrateMakeCommand;
use App\Support\ModularCanvas\Commands\ModelMakeCommand;
use App\Support\ModularCanvas\Commands\NotificationMakeCommand;
use App\Support\ModularCanvas\Commands\ObserverMakeCommand;
use App\Support\ModularCanvas\Commands\PolicyMakeCommand;
use App\Support\ModularCanvas\Commands\ProviderMakeCommand;
use App\Support\ModularCanvas\Commands\RequestMakeCommand;
use App\Support\ModularCanvas\Commands\ResourceMakeCommand;
use App\Support\ModularCanvas\Commands\RuleMakeCommand;
use App\Support\ModularCanvas\Commands\SeederMakeCommand;
use App\Support\ModularCanvas\Commands\TestMakeCommand;
use Illuminate\Console\Application;
use Illuminate\Console\Application as Artisan;
use Illuminate\Support\ServiceProvider;
use Orchestra\Canvas\Console\CastMakeCommand as CanvasCastMakeCommand;
use Orchestra\Canvas\Console\ChannelMakeCommand as CanvasChannelMakeCommand;
use Orchestra\Canvas\Console\ComponentMakeCommand as CanvasComponentMakeCommand;
use Orchestra\Canvas\Console\ConsoleMakeCommand as CanvasConsoleMakeCommand;
use Orchestra\Canvas\Console\ControllerMakeCommand as CanvasControllerMakeCommand;
use Orchestra\Canvas\Console\EventMakeCommand as CanvasEventMakeCommand;
use Orchestra\Canvas\Console\ExceptionMakeCommand as CanvasExceptionMakeCommand;
use Orchestra\Canvas\Console\FactoryMakeCommand as CanvasFactoryMakeCommand;
use Orchestra\Canvas\Console\JobMakeCommand as CanvasJobMakeCommand;
use Orchestra\Canvas\Console\ListenerMakeCommand as CanvasListenerMakeCommand;
use Orchestra\Canvas\Console\MailMakeCommand as CanvasMailMakeCommand;
use Orchestra\Canvas\Console\MiddlewareMakeCommand as CanvasMiddlewareMakeCommand;
use Orchestra\Canvas\Console\MigrateMakeCommand as CanvasMigrateMakeCommand;
use Orchestra\Canvas\Console\ModelMakeCommand as CanvasModelMakeCommand;
use Orchestra\Canvas\Console\NotificationMakeCommand as CanvasNotificationMakeCommand;
use Orchestra\Canvas\Console\ObserverMakeCommand as CanvasObserverMakeCommand;
use Orchestra\Canvas\Console\PolicyMakeCommand as CanvasPolicyMakeCommand;
use Orchestra\Canvas\Console\ProviderMakeCommand as CanvasProviderMakeCommand;
use Orchestra\Canvas\Console\RequestMakeCommand as CanvasRequestMakeCommand;
use Orchestra\Canvas\Console\ResourceMakeCommand as CanvasResourceMakeCommand;
use Orchestra\Canvas\Console\RuleMakeCommand as CanvasRuleMakeCommand;
use Orchestra\Canvas\Console\SeederMakeCommand as CanvasSeederMakeCommand;
use Orchestra\Canvas\Console\TestMakeCommand as CanvasTestMakeCommand;

class ModularCanvasServiceProvider extends ServiceProvider
{
    /**
     * @var array<class-string, class-string>
     */
    protected array $canvasCommandBindings = [
        CanvasCastMakeCommand::class => CastMakeCommand::class,
        CanvasChannelMakeCommand::class => ChannelMakeCommand::class,
        CanvasComponentMakeCommand::class => ComponentMakeCommand::class,
        CanvasConsoleMakeCommand::class => ConsoleMakeCommand::class,
        CanvasControllerMakeCommand::class => ControllerMakeCommand::class,
        CanvasEventMakeCommand::class => EventMakeCommand::class,
        CanvasExceptionMakeCommand::class => ExceptionMakeCommand::class,
        CanvasFactoryMakeCommand::class => FactoryMakeCommand::class,
        CanvasJobMakeCommand::class => JobMakeCommand::class,
        CanvasListenerMakeCommand::class => ListenerMakeCommand::class,
        CanvasMailMakeCommand::class => MailMakeCommand::class,
        CanvasMiddlewareMakeCommand::class => MiddlewareMakeCommand::class,
        CanvasMigrateMakeCommand::class => MigrateMakeCommand::class,
        CanvasModelMakeCommand::class => ModelMakeCommand::class,
        CanvasNotificationMakeCommand::class => NotificationMakeCommand::class,
        CanvasObserverMakeCommand::class => ObserverMakeCommand::class,
        CanvasPolicyMakeCommand::class => PolicyMakeCommand::class,
        CanvasProviderMakeCommand::class => ProviderMakeCommand::class,
        CanvasRequestMakeCommand::class => RequestMakeCommand::class,
        CanvasResourceMakeCommand::class => ResourceMakeCommand::class,
        CanvasRuleMakeCommand::class => RuleMakeCommand::class,
        CanvasSeederMakeCommand::class => SeederMakeCommand::class,
        CanvasTestMakeCommand::class => TestMakeCommand::class,
    ];

    #[\Override]
    public function register(): void
    {
        if (! class_exists(CanvasModelMakeCommand::class)) {
            return;
        }

        $this->app->booted(function (): void {
            Artisan::starting(function (Application $application): void {
                $this->registerCanvasCommandOverrides();
            });
        });
    }

    protected function registerCanvasCommandOverrides(): void
    {
        $this->app->singleton(CanvasMigrateMakeCommand::class, fn ($app) => new MigrateMakeCommand(
            $app['migration.creator'],
            $app['composer'],
        ));

        foreach ($this->canvasCommandBindings as $canvasCommand => $modularCanvasCommand) {
            if ($canvasCommand === CanvasMigrateMakeCommand::class) {
                continue;
            }

            $this->app->singleton($canvasCommand, $modularCanvasCommand);
        }
    }
}
