<?php

declare(strict_types=1);

namespace App\Session;

use Illuminate\Contracts\Auth\Factory;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Session\DatabaseSessionHandler;

class PolymorphicDatabaseSessionHandler extends DatabaseSessionHandler
{
    public function __construct(
        ConnectionInterface $connection,
        string $table,
        int $minutes,
        ?Container $container = null,
        protected ?AuthFactory $auth = null,
    ) {
        parent::__construct($connection, $table, $minutes, $container);

        if (! $this->auth instanceof Factory && $container instanceof Container) {
            $this->auth = $container->make(AuthFactory::class);
        }
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    #[\Override]
    protected function addUserInformation(&$payload): static
    {
        $user = $this->authenticatedUser();

        $payload['user_type'] = $user?->getMorphClass();
        $payload['user_id'] = $user?->getKey();

        return $this;
    }

    protected function authenticatedUser(): ?Model
    {
        if (! $this->auth instanceof Factory) {
            return null;
        }

        foreach (array_keys(config('auth.guards', [])) as $guardName) {
            if (! is_string($guardName)) {
                continue;
            }

            $guard = $this->auth->guard($guardName);

            if (! $guard->check()) {
                continue;
            }

            $user = $guard->user();

            if ($user instanceof Model) {
                return $user;
            }
        }

        return null;
    }
}
