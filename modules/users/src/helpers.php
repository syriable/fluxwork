<?php

declare(strict_types=1);

namespace Modules\Users;

use Illuminate\Support\Collection;

if (! function_exists('timezoneList')) {
    /**
     * @return Collection<string, non-falsy-string>
     */
    function timezoneList(): Collection
    {
        static $timezones = null;

        if ($timezones instanceof Collection) {
            return $timezones;
        }

        $now = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));
        $timezone = [];

        foreach (timezone_identifiers_list(\DateTimeZone::ALL) as $identifier) {
            $offset = $now->setTimezone(new \DateTimeZone($identifier))->format('P');
            $timezone[$identifier] = sprintf('%s (UTC %s)', $identifier, $offset);
        }

        $timezones = collect($timezone)->sortKeys();

        return $timezones;
    }
}
