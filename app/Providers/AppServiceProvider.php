<?php

declare(strict_types=1);

namespace App\Providers;

use App\Session\PolymorphicDatabaseSessionHandler;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use Livewire\Blaze\Blaze;
use Syriable\Filament\Plugins\Translator\ConventionRegistry;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    #[\Override]
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Session::extend('database', function ($app) {
            $config = $app['config']['session'];

            return new PolymorphicDatabaseSessionHandler(
                $app['db']->connection($config['connection']),
                $config['table'],
                $config['lifetime'],
                $app,
            );
        });

        app(ConventionRegistry::class)->registerDefaults();
        // Layout components must not be Blaze-compiled: they provide Livewire's required
        // root HTML tag and call Filament helpers. Compiling them causes RootTagMissingFromViewException.
        Blaze::optimize()
            ->in(resource_path('views/components'))
            ->in(resource_path('views/components/layouts'), compile: false);
        $this->configureDates();
        $this->configureModels();
        $this->configureCommands();
        $this->configurePasswordValidation();
    }

    /**
     * Configure the dates.
     */
    private function configureDates(): void
    {
        Date::use(CarbonImmutable::class);
    }

    /**
     * Configure the models.
     */
    private function configureModels(): void
    {
        Model::shouldBeStrict(! App::isProduction());
        Model::unguard();
    }

    /**
     * Configure the application's commands.
     */
    private function configureCommands(): void
    {
        DB::prohibitDestructiveCommands(
            App::isProduction()
        );
    }

    /**
     * Configure the password validation rules.
     */
    private function configurePasswordValidation(): void
    {
        Password::defaults(fn () => App::isProduction() ? Password::min(8)->uncompromised() : null);
    }
}
