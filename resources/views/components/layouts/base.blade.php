@props([
    'livewire' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ __('filament-panels::layout.direction') ?? 'ltr' }}"
    @class([
        'fl',
        'dark' => filament()->hasDarkMode() && filament()->hasDarkModeForced(),
    ])>

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @if ($favicon = filament()->getFavicon())
        <link rel="icon" href="{{ $favicon }}" />
    @endif

    @php
        $title = trim(strip_tags($livewire?->getTitle() ?? ''));
        $brandName = trim(strip_tags(filament()->getBrandName()));
    @endphp

    <title>
        {{ filled($title) ? $title : null }}
        {{ filled($brandName) && filled($title) ? ' - ' : null }}
        {{ filled($brandName) ? $brandName : null }}
    </title>

    <style>
        [x-cloak=''],
        [x-cloak='x-cloak'],
        [x-cloak='1'] {
            display: none !important;
        }

        [x-cloak='inline-flex'] {
            display: inline-flex !important;
        }

        @media (max-width: 1023px) {
            [x-cloak='-lg'] {
                display: none !important;
            }
        }

        @media (min-width: 1024px) {
            [x-cloak='lg'] {
                display: none !important;
            }
        }
    </style>

    @filamentStyles

    {{ filament()->getTheme()->getHtml() }}
    {{ filament()->getFontPreloadHtml() }}
    {{ filament()->getMonoFontPreloadHtml() }}
    {{ filament()->getSerifFontPreloadHtml() }}
    {{ filament()->getFontHtml() }}
    {{ filament()->getMonoFontHtml() }}
    {{ filament()->getSerifFontHtml() }}

    <style>
        :root {
            --font-family: '{!! filament()->getFontFamily() !!}';
            --mono-font-family: '{!! filament()->getMonoFontFamily() !!}';
            --serif-font-family: '{!! filament()->getSerifFontFamily() !!}';
            --default-theme-mode: {{ filament()->getDefaultThemeMode()->value }};
        }

        html.fl {
            --livewire-progress-bar-color: var(--primary-500);
        }
    </style>

    @stack('styles')

    @if (!filament()->hasDarkMode())
        <script>
            localStorage.setItem('theme', 'light')
        </script>
    @elseif (filament()->hasDarkModeForced())
        <script>
            localStorage.setItem('theme', 'dark')
        </script>
    @else
        <script>
            const loadDarkMode = () => {
                window.theme = localStorage.getItem('theme') ?? @js(filament()->getDefaultThemeMode()->value)

                if (
                    window.theme === 'dark' ||
                    (window.theme === 'system' &&
                        window.matchMedia('(prefers-color-scheme: dark)')
                        .matches)
                ) {
                    document.documentElement.classList.add('dark')
                }
            }

            loadDarkMode()

            document.addEventListener('livewire:navigated', loadDarkMode)
        </script>
    @endif
    @fluxAppearance
</head>

<body
    {{ $attributes->merge($livewire?->getExtraBodyAttributes() ?? [], escape: false)->class(['fl-body', 'fl-panel-' . filament()->getId()]) }}>

    {{ $slot }}

    @livewire(Filament\Livewire\Notifications::class)

    @filamentScripts(withCore: true)

    @if (filament()->hasBroadcasting() && config('filament.broadcasting.echo'))
        <script data-navigate-once>
            window.Echo = new window.EchoFactory(@js(config('filament.broadcasting.echo')))

            window.dispatchEvent(new CustomEvent('EchoLoaded'))
        </script>
    @endif

    @if (filament()->hasDarkMode() && !filament()->hasDarkModeForced())
        <script>
            loadDarkMode()
        </script>
    @endif

    @stack('scripts')
    @fluxScripts
</body>

</html>
