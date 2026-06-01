<?php

declare(strict_types=1);

namespace Modules\Users\States\Account\Transitions;

use Modules\Users\Models\Buyer;
use Modules\Users\States\Account\Active;
use Spatie\ModelStates\Transition;

final class SuspendedToActive extends Transition
{
    public function __construct(
        private readonly Buyer $buyer,
    ) {}

    public function handle(): Buyer
    {
        $this->buyer->account_state = new Active($this->buyer);
        $this->buyer->suspended_at = null;
        $this->buyer->suspension_reason = null;
        $this->buyer->save();

        return $this->buyer;
    }
}
