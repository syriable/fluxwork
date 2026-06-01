<?php

declare(strict_types=1);

namespace App\Providers;

use App\Session\PolymorphicDatabaseSessionHandler;
use BladeUI\Icons\Factory;
use Carbon\CarbonImmutable;
use CodeWithDennis\FilamentAdvancedComponents\Filament\Tables\Components\AdvancedTextColumn;
use Filament\Actions\Action;
use Filament\Commands\FileGenerators\Resources\Pages\ResourceCreateRecordPageClassGenerator;
use Filament\Commands\FileGenerators\Resources\Pages\ResourceEditRecordPageClassGenerator;
use Filament\Commands\FileGenerators\Resources\Pages\ResourceListRecordsPageClassGenerator;
use Filament\Commands\FileGenerators\Resources\ResourceClassGenerator;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Alignment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use Livewire\Blaze\Blaze;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    #[\Override]
    public function register(): void
    {
        $this->app->bind(ResourceClassGenerator::class, \App\Console\Commands\FileGenerators\Resources\ResourceClassGenerator::class);
        $this->app->bind(ResourceEditRecordPageClassGenerator::class, \App\Console\Commands\FileGenerators\Resources\Pages\ResourceEditRecordPageClassGenerator::class);
        $this->app->bind(ResourceListRecordsPageClassGenerator::class, \App\Console\Commands\FileGenerators\Resources\Pages\ResourceListRecordsPageClassGenerator::class);
        $this->app->bind(ResourceCreateRecordPageClassGenerator::class, \App\Console\Commands\FileGenerators\Resources\Pages\ResourceCreateRecordPageClassGenerator::class);

        $this->initializeFilamentComponents();
        $this->microFilamentComponents();
        $this->configureFactoryIcons();
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

        Blaze::optimize()->in(resource_path('views/components'));
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

    protected function initializeFilamentComponents(): void
    {
        Page::alignFormActionsEnd();
        TextInput::configureUsing(fn ($component) => $component->maxLength(255)->trim());
        Textarea::configureUsing(fn ($component) => $component->trim());
        Action::configureUsing(fn ($action) => $action->modalAlignment(Alignment::Start)->modalWidth('md')->modalFooterActionsAlignment(Alignment::Center));
        Schema::configureUsing(fn ($schema) => $schema->columns(['lg' => 1, 'xl' => 1]));
        AdvancedTextColumn::configureUsing(fn ($column) => $column->url(fn ($column) => match (true) {
            $column->getMailable() => 'mailto:'.$column->getState(),
            $column->getCallable() => 'tel:'.$column->getState(),
            $column->getWhatsAppable() => 'https://wa.me/'.$column->getState(),
            default => null,
        }));
    }

    protected function microFilamentComponents(): void
    {
        /** @phpstan-ignore-next-line */
        ToggleButtons::macro('fullWidth', fn ($width = '100%') => $this->extraAttributes(fn (): array => [
            'style' => sprintf(
                'width: %s; white-space: nowrap; overflow-x: clip;',
                /** @phpstan-ignore-next-line */
                $this->evaluate($width)
            ),
        ]));

        /** @phpstan-ignore-next-line */
        Section::macro('prime', fn () => $this->extraAttributes(fn (): array => [
            'class' => 'border border-gray-200 rounded-2xl p-1 bg-gray-50 dark:border-gray-700 dark:bg-gray-800',
        ]));

        // Textarea::macro('counter', fn () => $this->fieldWrapperView('filament-advanced-components::filament.components.textarea')->extraAlpineAttributes(['x-init' => '$watch(\'state\',value => length = value?.length); length = state?.length ?? length']));

    }

    /**
     * Configure Factory Icons SVG file.
     */
    private function configureFactoryIcons(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory): void {
            $factory->add('fluxwork', [
                'path' => resource_path('svg/icons'),
                'prefix' => 'flux',
            ]);
        });
    }
}
