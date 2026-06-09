<?php

declare(strict_types=1);

namespace Modules\Users\Jobs\Tasks;

use Closure;
use Modules\Users\Models\Buyer;

class Preparation
{
    public function handle(Buyer $buyer, Closure $next): mixed
    {
        activity('onboarding')
            ->performedOn($buyer)
            ->event('preparation:started')
            ->log('preparation:started');

        return $next($buyer);
    }
}
