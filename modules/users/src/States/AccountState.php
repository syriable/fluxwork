<?php

declare(strict_types=1);

namespace Modules\Users\States;

use Modules\Users\Models\Buyer;
use Modules\Users\States\Account\Active;
use Modules\Users\States\Account\Suspended;
use Modules\Users\States\Account\Transitions\ActiveToSuspended;
use Modules\Users\States\Account\Transitions\SuspendedToActive;
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

/**
 * @extends State<Buyer>
 */
abstract class AccountState extends State
{
    #[\Override]
    public static function config(): StateConfig
    {
        return parent::config()
            ->registerState([
                Active::class,
                Suspended::class,
            ])
            ->default(Active::class)
            ->allowTransition(Active::class, Suspended::class, ActiveToSuspended::class)
            ->allowTransition(Suspended::class, Active::class, SuspendedToActive::class);
    }
}
