<?php

declare(strict_types=1);

namespace App\Rules;

use Closure;
use DateTimeZone;
use Illuminate\Contracts\Validation\ValidationRule;

final class Timezone implements ValidationRule
{
    /** @var array<int, string>|null */
    private static ?array $identifiers = null;

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value) || $value === '' || ! in_array($value, $this->identifiers(), true)) {
            $fail(__('validation.timezone', ['attribute' => $attribute]));
        }
    }

    /**
     * @return array<int, string>
     */
    private function identifiers(): array
    {
        return self::$identifiers ??= DateTimeZone::listIdentifiers();
    }
}
