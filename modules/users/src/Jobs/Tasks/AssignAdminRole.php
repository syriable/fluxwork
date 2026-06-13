<?php

declare(strict_types=1);

namespace Modules\Users\Jobs\Tasks;

use Closure;
use Modules\Users\Models\Admin;
use Spatie\Permission\Guard;
use Spatie\Permission\Models\Role;

/**
 * Step 1 of the buyer onboarding pipeline: grant the "buyer" role.
 *
 * The role is created on demand so the pipeline is self-healing and does not
 * depend on a seeder having run first.
 */
class AssignAdminRole
{
    public const ROLE = 'admin';

    public function handle(Admin $admin, Closure $next): mixed
    {
        $role = Role::findOrCreate(self::ROLE, Guard::getDefaultName($admin::class));

        if (! $admin->hasRole($role)) {
            $admin->assignRole($role);

            activity('onboarding')
                ->performedOn($admin)
                ->event('assigned:role')
                ->log('assigned:role');
        }

        return $next($admin);
    }
}
