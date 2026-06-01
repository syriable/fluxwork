<?php

declare(strict_types=1);

namespace App\Support;

class UnicodeSlug
{
    public static function make(string $text, string $separator = '-'): string
    {
        $normalized = normalizer_normalize($text);
        $text = $normalized === false ? $text : $normalized;

        $text = preg_replace('/[^\p{L}\p{N}\s\-_]+/u', '', $text) ?? '';

        // Convert separators to -
        $text = preg_replace('/[\s\-_]+/u', $separator, (string) $text);

        // lowercase supported languages
        $text = mb_strtolower((string) $text, 'UTF-8');

        return trim($text, $separator);
    }
}
