<?php

declare(strict_types=1);

namespace Modules\Users\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum AccountState: string implements HasColor, HasIcon, HasLabel
{
    case Active = 'active';
    case Suspended = 'suspended';

    public function getLabel(): string
    {
        return match ($this) {
            self::Active => 'Active',
            self::Suspended => 'Suspended',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Active => 'success',
            self::Suspended => 'danger',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Active => 'heroicon-o-check-circle',
            self::Suspended => 'heroicon-o-shield-exclamation',
        };
    }
}
