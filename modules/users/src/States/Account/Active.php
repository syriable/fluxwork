<?php

declare(strict_types=1);

namespace Modules\Users\States\Account;

use Modules\Users\States\AccountState;

final class Active extends AccountState
{
    public static string $name = 'active';
}
