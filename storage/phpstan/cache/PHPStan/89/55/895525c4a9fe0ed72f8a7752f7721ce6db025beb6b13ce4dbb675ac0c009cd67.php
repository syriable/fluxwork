<?php declare(strict_types = 1);

// osfsl-/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Queue/QueueServiceProvider.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\QueueServiceProvider
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-814a8d616c84060a5643958b6c2f8cb1c4fd23e013e65e5dc1b3a4100eaa007c-8.4.19-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Queue\\QueueServiceProvider',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Queue/QueueServiceProvider.php',
      ),
    ),
    'namespace' => 'Illuminate\\Queue',
    'name' => 'Illuminate\\Queue\\QueueServiceProvider',
    'shortName' => 'QueueServiceProvider',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 28,
    'endLine' => 408,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\ServiceProvider',
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Support\\DeferrableProvider',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'register' => 
      array (
        'name' => 'register',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the service provider.
 *
 * @return void
 */',
        'startLine' => 37,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'configureSerializableClosureUses' => 
      array (
        'name' => 'configureSerializableClosureUses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Configure serializable closures uses.
 *
 * @return void
 */',
        'startLine' => 54,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerManager' => 
      array (
        'name' => 'registerManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the queue manager.
 *
 * @return void
 */',
        'startLine' => 78,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerConnection' => 
      array (
        'name' => 'registerConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the default queue connection binding.
 *
 * @return void
 */',
        'startLine' => 95,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerConnectors' => 
      array (
        'name' => 'registerConnectors',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 40,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the connectors on the queue manager.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 108,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerNullConnector' => 
      array (
        'name' => 'registerNullConnector',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 46,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the Null queue connector.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 121,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerSyncConnector' => 
      array (
        'name' => 'registerSyncConnector',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 134,
            'endLine' => 134,
            'startColumn' => 46,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the Sync queue connector.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 134,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerDeferredConnector' => 
      array (
        'name' => 'registerDeferredConnector',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 147,
            'endLine' => 147,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the Deferred queue connector.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 147,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerBackgroundConnector' => 
      array (
        'name' => 'registerBackgroundConnector',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 160,
            'endLine' => 160,
            'startColumn' => 52,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the Background queue connector.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 160,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerFailoverConnector' => 
      array (
        'name' => 'registerFailoverConnector',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the Failover queue connector.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 173,
        'endLine' => 181,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerDatabaseConnector' => 
      array (
        'name' => 'registerDatabaseConnector',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 189,
            'endLine' => 189,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the database queue connector.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 189,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerRedisConnector' => 
      array (
        'name' => 'registerRedisConnector',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 47,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the Redis queue connector.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 202,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerBeanstalkdConnector' => 
      array (
        'name' => 'registerBeanstalkdConnector',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 215,
            'endLine' => 215,
            'startColumn' => 52,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the Beanstalkd queue connector.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 215,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerSqsConnector' => 
      array (
        'name' => 'registerSqsConnector',
        'parameters' => 
        array (
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 228,
            'endLine' => 228,
            'startColumn' => 45,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the Amazon SQS queue connector.
 *
 * @param  \\Illuminate\\Queue\\QueueManager  $manager
 * @return void
 */',
        'startLine' => 228,
        'endLine' => 233,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerWorker' => 
      array (
        'name' => 'registerWorker',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the queue worker.
 *
 * @return void
 */',
        'startLine' => 240,
        'endLine' => 278,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerListener' => 
      array (
        'name' => 'registerListener',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the queue listener.
 *
 * @return void
 */',
        'startLine' => 285,
        'endLine' => 290,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerRoutes' => 
      array (
        'name' => 'registerRoutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the default queue routes binding.
 *
 * @return void
 */',
        'startLine' => 297,
        'endLine' => 302,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'registerFailedJobServices' => 
      array (
        'name' => 'registerFailedJobServices',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the failed job services.
 *
 * @return void
 */',
        'startLine' => 309,
        'endLine' => 335,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'databaseFailedJobProvider' => 
      array (
        'name' => 'databaseFailedJobProvider',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 343,
            'endLine' => 343,
            'startColumn' => 50,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new database failed job provider.
 *
 * @param  array  $config
 * @return \\Illuminate\\Queue\\Failed\\DatabaseFailedJobProvider
 */',
        'startLine' => 343,
        'endLine' => 348,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'databaseUuidFailedJobProvider' => 
      array (
        'name' => 'databaseUuidFailedJobProvider',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 54,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new database failed job provider that uses UUIDs as IDs.
 *
 * @param  array  $config
 * @return \\Illuminate\\Queue\\Failed\\DatabaseUuidFailedJobProvider
 */',
        'startLine' => 356,
        'endLine' => 361,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'dynamoFailedJobProvider' => 
      array (
        'name' => 'dynamoFailedJobProvider',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 369,
            'endLine' => 369,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new DynamoDb failed job provider.
 *
 * @param  array  $config
 * @return \\Illuminate\\Queue\\Failed\\DynamoDbFailedJobProvider
 */',
        'startLine' => 369,
        'endLine' => 390,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
      'provides' => 
      array (
        'name' => 'provides',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the services provided by the provider.
 *
 * @return array
 */',
        'startLine' => 397,
        'endLine' => 407,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'implementingClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'currentClassName' => 'Illuminate\\Queue\\QueueServiceProvider',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));