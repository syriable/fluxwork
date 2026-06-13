<?php

declare(strict_types=1);

namespace Modules\Users\Jobs\Tasks;

use Closure;
use Illuminate\Database\Eloquent\Model;

class Preparation
{
    public function handle(Model $model, Closure $next): mixed
    {
        activity('onboarding')
            ->performedOn($model)
            ->event('preparation:started')
            ->log('preparation:started');

        return $next($model);
    }
}
