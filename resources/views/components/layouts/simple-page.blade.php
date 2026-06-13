@props([
    'livewire' => null,
    'maxContentWidth' => null,
])

@php
    $resolvedWidth = $maxContentWidth ?? $livewire?->getMaxContentWidth();
    $widthKey = $resolvedWidth instanceof \BackedEnum ? $resolvedWidth->value : $resolvedWidth;
@endphp

<div {{ $attributes->class(['fire-simple-page flex items-center min-h-screen']) }}>
    <div @class([
        'mx-auto w-full',
        match ($widthKey) {
            'sm' => 'max-w-sm',
            'md' => 'max-w-md',
            'lg' => 'max-w-lg',
            'xl' => 'max-w-xl',
            '2xl' => 'max-w-2xl',
            '3xl' => 'max-w-3xl',
            '4xl' => 'max-w-4xl',
            '5xl' => 'max-w-5xl',
            '6xl' => 'max-w-6xl',
            '7xl' => 'max-w-7xl',
            default => 'max-w-full',
        },
    ])>
        {{ $slot }}
    </div>

    @if (! ($livewire instanceof \Filament\Tables\Contracts\HasTable))
        <x-filament-actions::modals />
    @endif

</div>
