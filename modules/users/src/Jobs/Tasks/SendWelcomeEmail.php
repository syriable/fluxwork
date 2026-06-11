<?php

declare(strict_types=1);

namespace Modules\Users\Jobs\Tasks;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Modules\Users\Mail\WelcomeBuyerMail;

/**
 * Step 2 of the buyer onboarding pipeline: send the welcome email.
 */
class SendWelcomeEmail
{
    public function handle(Model $model, Closure $next): mixed
    {
        Mail::to($model->email)->send(new WelcomeBuyerMail($model));

        activity('onboarding')
            ->performedOn($model)
            ->event('mailed:welcome-email')
            ->log('mailed:welcome-email');

        return $next($model);
    }
}
