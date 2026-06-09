<?php

declare(strict_types=1);

namespace Modules\Users\Observers;

use Modules\Users\Jobs\ConfigureNewBuyer;
use Modules\Users\Models\Buyer;

class BuyerObserver
{
    /**
     * Handle the Buyer "created" event.
     */
    public function created(Buyer $buyer): void
    {
        ConfigureNewBuyer::dispatch($buyer);
    }

    /**
     * Handle the Buyer "updated" event.
     */
    public function updated(Buyer $buyer): void
    {
        //
    }

    /**
     * Handle the Buyer "deleted" event.
     */
    public function deleted(Buyer $buyer): void
    {
        //
    }

    /**
     * Handle the Buyer "restored" event.
     */
    public function restored(Buyer $buyer): void
    {
        //
    }

    /**
     * Handle the Buyer "force deleted" event.
     */
    public function forceDeleted(Buyer $buyer): void
    {
        //
    }
}
