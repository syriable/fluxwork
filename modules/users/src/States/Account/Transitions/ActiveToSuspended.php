<?php

declare(strict_types=1);

namespace Modules\Users\States\Account\Transitions;

use Modules\Users\Models\Buyer;
use Modules\Users\States\Account\Suspended;
use Spatie\ModelStates\Transition;

final class ActiveToSuspended extends Transition
{
    public function __construct(
        private readonly Buyer $buyer,
        private readonly string $reason,
    ) {}

    public function handle(): Buyer
    {
        $this->buyer->account_state = new Suspended($this->buyer);
        $this->buyer->suspended_at = $this->buyer->freshTimestamp();
        $this->buyer->suspension_reason = $this->reason;
        $this->buyer->save();

        return $this->buyer;
    }
}
