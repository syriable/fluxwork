<?php

declare(strict_types=1);

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

/**
 * Rejects values that are visually empty — i.e., contain only Unicode
 * whitespace, line/paragraph separators, or format characters (zero-width
 * joiners, bidi controls, soft hyphens, etc.).
 *
 * Use alongside `required` when you also need to guard against inputs
 * that look like content but render as nothing.
 */
final readonly class NotEffectivelyBlank implements ValidationRule
{
    /**
     * Matches any character that is invisible when rendered:
     *   \p{Z}  — all Unicode space separators (incl. U+00A0, U+2000–U+200A, U+202F, U+205F, U+3000)
     *   \p{Cf} — format characters (ZWJ, ZWNJ, RLM/LRM, soft hyphen, etc.)
     *   \s     — ASCII whitespace plus U+2028 / U+2029 line/para separators under /u
     */
    private const string INVISIBLE_PATTERN = '/[\p{Z}\p{Cf}\s]/u';

    /**
     * @param  Closure(string): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_scalar($value)) {
            return;
        }

        if (preg_replace(self::INVISIBLE_PATTERN, '', (string) $value) === '') {
            $fail(__('validation.visible_characters', ['attribute' => $attribute]));
        }
    }
}
