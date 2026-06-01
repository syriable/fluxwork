@props([
    'maxWidth' => 'md',
])

<div class="flex min-h-[100dvh] flex-col items-center justify-center px-4 py-10 sm:py-16">
    <div @class([
        'w-full',
        match ($maxWidth) {
            'sm' => 'max-w-sm',
            'lg' => 'max-w-lg',
            default => 'max-w-md',
        },
    ])>
        <div
            class="rounded-xl border border-zinc-200 bg-white p-5 shadow-sm dark:border-zinc-700 dark:bg-zinc-900 sm:p-6 [&_form]:mt-6 [&_form]:grid [&_form]:gap-4 [&_form]:text-start [&_p]:text-center">
            {{ $slot }}
        </div>
    </div>

    @if (!$this instanceof \Filament\Tables\Contracts\HasTable)
        <x-filament-actions::modals />
    @endif
</div>
