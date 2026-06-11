<?php

declare(strict_types=1);

namespace Modules\Users\Observers;

use Modules\Users\Jobs\ConfigureNewAdmin;
use Modules\Users\Models\Admin;

class AdminObserver
{
    /**
     * Handle the Admin "created" event.
     */
    public function created(Admin $admin): void
    {
        ConfigureNewAdmin::dispatch($admin);
    }

    /**
     * Handle the Admin "updated" event.
     */
    public function updated(Admin $admin): void
    {
        //
    }

    /**
     * Handle the Admin "deleted" event.
     */
    public function deleted(Admin $admin): void
    {
        //
    }

    /**
     * Handle the Admin "restored" event.
     */
    public function restored(Admin $admin): void
    {
        //
    }

    /**
     * Handle the Admin "force deleted" event.
     */
    public function forceDeleted(Admin $admin): void
    {
        //
    }
}
