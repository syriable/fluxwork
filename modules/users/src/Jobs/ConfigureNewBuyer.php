<?php

declare(strict_types=1);

namespace Modules\Users\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Pipeline\Pipeline;
use Modules\Users\Jobs\Tasks\AssignBuyerRole;
use Modules\Users\Jobs\Tasks\Preparation;
use Modules\Users\Jobs\Tasks\SendWelcomeEmail;
use Modules\Users\Models\Buyer;
use Syriable\Filament\Plugins\Activitylog\Support\ActivityBatch;

/**
 * Runs the onboarding ("configuration") process for a newly registered buyer.
 *
 * Each step is a self-contained task that receives the buyer, performs its
 * work, records an activity-log entry, then passes the buyer to the next task.
 * To add a new step, append its class to {@see self::tasks()}.
 *
 * All activity-log entries produced by the pipeline are grouped under a single
 * batch via {@see ActivityBatch::withinBatch()} so the onboarding shows up as
 * one logical event in the activity timeline.
 */
class ConfigureNewBuyer implements ShouldQueue
{
    use Queueable;

    public function __construct(public Buyer $buyer) {}

    public function handle(Pipeline $pipeline): void
    {
        ActivityBatch::withinBatch(fn () => $pipeline
            ->send($this->buyer)
            ->through($this->tasks())
            ->thenReturn()
        );
    }

    /**
     * The ordered onboarding tasks. Add new steps here.
     *
     * @return list<class-string>
     */
    protected function tasks(): array
    {
        return [
            SendWelcomeEmail::class,
            AssignBuyerRole::class,
            Preparation::class,
        ];
    }
}
