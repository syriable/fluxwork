<?php

declare(strict_types=1);

namespace Modules\Users\Jobs\Tasks;

use Closure;
use Modules\Users\Models\Buyer;
use Spatie\Permission\Guard;
use Spatie\Permission\Models\Role;

/**
 * Step 1 of the buyer onboarding pipeline: grant the "buyer" role.
 *
 * The role is created on demand so the pipeline is self-healing and does not
 * depend on a seeder having run first.
 */
class AssignBuyerRole
{
    public const ROLE = 'buyer';

    public function handle(Buyer $buyer, Closure $next): mixed
    {
        $role = Role::findOrCreate(self::ROLE, Guard::getDefaultName($buyer::class));

        if (! $buyer->hasRole($role)) {
            $buyer->assignRole($role);

            activity('onboarding')
                ->performedOn($buyer)
                ->event('assigned:role')
                ->log('assigned:role');
        }

        return $next($buyer);
    }
}
