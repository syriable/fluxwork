<?php

declare(strict_types=1);

namespace Modules\Users\Jobs\Tasks;

use Closure;
use Illuminate\Support\Facades\Mail;
use Modules\Users\Mail\WelcomeBuyerMail;
use Modules\Users\Models\Buyer;

/**
 * Step 2 of the buyer onboarding pipeline: send the welcome email.
 */
class SendWelcomeEmail
{
    public function handle(Buyer $buyer, Closure $next): mixed
    {
        Mail::to($buyer->email)->send(new WelcomeBuyerMail($buyer));

        activity('onboarding')
            ->performedOn($buyer)
            ->event('mailed:welcome-email')
            ->log('mailed:welcome-email');

        return $next($buyer);
    }
}
