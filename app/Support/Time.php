<?php

declare(strict_types=1);

namespace App\Support;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;
use DateTimeInterface;
use DateTimeZone;
use Illuminate\Support\Facades\Auth;
use Throwable;

/**
 * Timezone-aware presentation helper.
 *
 * Per Document 01 §19 and Document 02 §19, the database stores every timestamp
 * in UTC. This helper is the single sanctioned path for converting a stored
 * UTC timestamp into a user-local presentation value. It must be called only
 * at the presentation layer (Livewire view methods, Filament column modifiers,
 * Blade helpers, notification templates, exporters) — never inside a query,
 * an Action, or a Service that mutates state.
 *
 * The IANA tzdata bundled with PHP is the source of truth. DST and historical
 * offset changes are handled by ext/date; this class never computes offsets
 * by hand.
 */
final class Time
{
    /**
     * Cache of the IANA identifier set, populated lazily once per request.
     *
     * @var array<int, string>|null
     */
    private static ?array $identifiers = null;

    /**
     * Convert a stored UTC timestamp into the given user's local time.
     *
     * Accepts any value Carbon can interpret (CarbonInterface, DateTimeInterface,
     * ISO-8601 string, unix timestamp int). Returns a CarbonImmutable so the
     * caller cannot accidentally mutate the result.
     *
     * @param  object|null  $user  anything exposing a public `timezone` string
     *                             (User, Admin, or any model that follows the
     *                             §19.3 convention). null falls back through
     *                             auth() → settings → config.
     * @param  CarbonInterface|DateTimeInterface|string|int  $when  the UTC instant
     */
    public static function displayFor(?object $user, CarbonInterface|DateTimeInterface|string|int $when): CarbonImmutable
    {
        return CarbonImmutable::parse($when, 'UTC')
            ->setTimezone(self::resolveTimezone($user));
    }

    /**
     * Current local time for the given user.
     *
     * Use this when the sender of a message needs to see the recipient's local
     * clock to decide whether the moment is appropriate (e.g. not 3 a.m. for them).
     *
     * @param  object|null  $user  anything exposing a public `timezone` string
     */
    public static function nowFor(?object $user): CarbonImmutable
    {
        return CarbonImmutable::now(self::resolveTimezone($user));
    }

    /**
     * Format a stored UTC timestamp in the user's local timezone, using
     * Carbon's locale-aware translatedFormat (per Document 08 §3.1 rule 15).
     *
     * @param  string  $format  any format string supported by Carbon::translatedFormat
     */
    public static function formatFor(
        ?object $user,
        CarbonInterface|DateTimeInterface|string|int $when,
        string $format = 'Y-m-d H:i',
    ): string {
        return self::displayFor($user, $when)->translatedFormat($format);
    }

    /**
     * Resolve the IANA timezone identifier to display in for a given subject.
     *
     * Resolution order (per Document 02 §19.2):
     *   1. The passed-in user's `timezone` property, if it is a valid IANA id.
     *   2. The currently authenticated user (when no user was passed).
     *   3. GeneralSettings::default_timezone.
     *   4. config('app.timezone').
     *   5. 'UTC' as last resort.
     *
     * Each candidate is validated; an unknown identifier is skipped, never thrown.
     * A render path must not 500 because of a stale profile value.
     */
    public static function resolveTimezone(?object $user = null): string
    {
        $candidate = self::extractTimezone($user);

        if ($candidate === null) {
            $authenticated = self::authenticatedUser();
            if ($authenticated !== null && $authenticated !== $user) {
                $candidate = self::extractTimezone($authenticated);
            }
        }

        if (self::isValidIdentifier($candidate)) {
            /** @var string $candidate */
            return $candidate;
        }

        $fromSettings = self::settingsDefault();
        if (self::isValidIdentifier($fromSettings)) {
            /** @var string $fromSettings */
            return $fromSettings;
        }

        $fromConfig = config('app.timezone');
        if (is_string($fromConfig) && self::isValidIdentifier($fromConfig)) {
            return $fromConfig;
        }

        return 'UTC';
    }

    /**
     * Whether the given string is a valid IANA timezone identifier.
     */
    public static function isValidIdentifier(?string $identifier): bool
    {
        if ($identifier === null || $identifier === '') {
            return false;
        }

        return in_array($identifier, self::identifiers(), true);
    }

    /**
     * Map of IANA identifier => "City (UTC±HH:MM)" with offsets computed
     * from the live tzdata at the moment of the call. Suitable for the
     * <select> on the profile locale section.
     *
     * @return array<string, string>
     */
    public static function selectOptions(): array
    {
        $reference = new \DateTimeImmutable('now', new DateTimeZone('UTC'));
        $options = [];

        foreach (self::identifiers() as $identifier) {
            $offset = new DateTimeZone($identifier)->getOffset($reference);
            $sign = $offset >= 0 ? '+' : '-';
            $abs = abs($offset);

            $segments = explode('/', $identifier);
            $city = str_replace('_', ' ', end($segments) ?: $identifier);

            $options[$identifier] = sprintf(
                '%s (UTC%s%02d:%02d)',
                $city,
                $sign,
                intdiv($abs, 3600),
                intdiv($abs % 3600, 60),
            );
        }

        asort($options);

        return $options;
    }

    /**
     * Extract a `timezone` string from a user-like object without coupling
     * this class to either the User or Admin model.
     */
    private static function extractTimezone(?object $user): ?string
    {
        if ($user === null) {
            return null;
        }

        if (! property_exists($user, 'timezone') && ! method_exists($user, '__get')) {
            return null;
        }

        /** @var mixed $value */
        $value = $user->timezone ?? null;

        return is_string($value) ? $value : null;
    }

    /**
     * Currently authenticated user across either guard, without throwing
     * if the auth manager isn't bound (e.g. console context, early boot).
     */
    private static function authenticatedUser(): ?object
    {
        try {
            $user = Auth::user();
        } catch (Throwable) {
            return null;
        }

        return $user;
    }

    /**
     * Read the operator-installed default timezone from Spatie Settings.
     * Returns null if settings are unbound (install wizard, tests).
     */
    private static function settingsDefault(): ?string
    {
        try {
            $value = config('app.timezone') ?? null;

            return is_string($value) ? $value : null;
        } catch (Throwable) {
            return null;
        }
    }

    /**
     * @return array<int, string>
     */
    private static function identifiers(): array
    {
        return self::$identifiers ??= DateTimeZone::listIdentifiers();
    }
}
