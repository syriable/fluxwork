<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Filament\Schemas\Components\Separator;
use App\Livewire\Auth\Actions\LoginAction;
use App\Livewire\Auth\Data\LoginData;
use App\Support\Livewire\Page;
use Filament\Actions\Action;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\Width;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

/**
 * @property-read Schema $form
 */
class Login extends Page
{
    protected string $view = 'livewire.auth.login';

    protected Width|string|null $maxContentWidth = Width::Small;

    /** @var array<string, mixed> */
    public array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    #[\Override]
    public function getTitle(): string
    {
        return 'Login';
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Actions::make([
                    Action::make('facebook')
                        ->color(Color::generateV3Palette('#1877F2'))
                        ->icon('flux-facebook')
                        ->label('Continue with Facebook')
                        ->extraAttributes(['class' => 'w-full icon-start']),
                    Action::make('google')
                        ->color('gray')
                        ->icon('flux-google')
                        ->label('Continue with Google')
                        ->extraAttributes(['class' => 'w-full icon-start']),
                ])
                    ->alignment(Alignment::Center),
                Separator::make()
                    ->text('OR'),
                TextInput::make('email')
                    ->required()
                    ->string()
                    ->autofocus(),
                TextInput::make('password')
                    ->password()
                    ->required()
                    ->autocomplete('current-password'),
                Flex::make([
                    Checkbox::make('remember')
                        ->label('Remember me'),
                    Action::make('forgot-password')
                        ->label('Forgot password?')
                        ->link(),
                ]),
            ]);
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('form')
                    ->heading('Login to your account')
                    ->schema([
                        $this->getFormContentComponent(),
                    ])
                    ->footerActions([
                        Action::make('register')
                            ->label("Don't have an account? Register here")
                            ->link()
                            ->extraAttributes(['class' => 'w-full mx-auto icon-start']),
                    ]),
            ]);
    }

    public function getFormContentComponent(): Component
    {
        return Form::make([EmbeddedSchema::make('form')])
            ->id('form')
            ->livewireSubmitHandler('authenticate')
            ->footer([
                Actions::make([
                    Action::make('login')
                        ->label('Login')
                        ->submit('authenticate'),
                ])
                    ->alignment(Alignment::End)
                    ->fullWidth()
                    ->key('form-actions'),
            ]);
    }

    public function authenticate(LoginAction $loginAction): ?RedirectResponse
    {
        $loginData = LoginData::from($this->form->getState());

        $loginAction->handle($loginData);

        if (! Auth::check()) {
            return null;
        }

        return redirect()->intended('/');
    }
}
