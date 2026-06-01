<?php declare(strict_types = 1);

// osfsl-/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Bus/Dispatcher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Bus\Dispatcher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ab53223d993022bb4fdf69102fc99b18fe24af4363e0bfcf9bfdc217477e9ad7-8.4.19-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Bus\\Dispatcher',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Bus/Dispatcher.php',
      ),
    ),
    'namespace' => 'Illuminate\\Bus',
    'name' => 'Illuminate\\Bus\\Dispatcher',
    'shortName' => 'Dispatcher',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 331,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Bus\\QueueingDispatcher',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Queue\\Attributes\\ReadsQueueAttributes',
      1 => 'Illuminate\\Support\\Queue\\Concerns\\ResolvesQueueRoutes',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'container' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The container implementation.
 *
 * @var \\Illuminate\\Contracts\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pipeline' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'pipeline',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The pipeline instance for the bus.
 *
 * @var \\Illuminate\\Pipeline\\Pipeline
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pipes' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'pipes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 131,
            'startFilePos' => 1190,
            'endTokenPos' => 132,
            'endFilePos' => 1191,
          ),
        ),
        'docComment' => '/**
 * The pipes to send commands through before dispatching.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'handlers' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'handlers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 52,
            'endLine' => 52,
            'startTokenPos' => 143,
            'startFilePos' => 1330,
            'endTokenPos' => 144,
            'endFilePos' => 1331,
          ),
        ),
        'docComment' => '/**
 * The command to handler mapping for non-self-handling events.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queueResolver' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'queueResolver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The queue resolver callback.
 *
 * @var \\Closure|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'allowsDispatchingAfterResponses' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'allowsDispatchingAfterResponses',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 162,
            'startFilePos' => 1600,
            'endTokenPos' => 162,
            'endFilePos' => 1603,
          ),
        ),
        'docComment' => '/**
 * Indicates if dispatching after response is disabled.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 54,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 33,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queueResolver' => 
          array (
            'name' => 'queueResolver',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 71,
                'endLine' => 71,
                'startTokenPos' => 185,
                'startFilePos' => 1752,
                'endTokenPos' => 185,
                'endFilePos' => 1755,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Closure',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 55,
            'endColumn' => 84,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new command dispatcher instance.
 */',
        'startLine' => 71,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatch' => 
      array (
        'name' => 'dispatch',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 30,
            'endColumn' => 37,
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
 * Dispatch a command to its appropriate handler.
 *
 * @param  mixed  $command
 * @return mixed
 */',
        'startLine' => 84,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatchSync' => 
      array (
        'name' => 'dispatchSync',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler' => 
          array (
            'name' => 'handler',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 100,
                'endLine' => 100,
                'startTokenPos' => 288,
                'startFilePos' => 2565,
                'endTokenPos' => 288,
                'endFilePos' => 2568,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 44,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dispatch a command to its appropriate handler in the current process.
 *
 * Queueable jobs will be dispatched to the "sync" queue.
 *
 * @param  mixed  $command
 * @param  mixed  $handler
 * @return mixed
 */',
        'startLine' => 100,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatchNow' => 
      array (
        'name' => 'dispatchNow',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 118,
            'endLine' => 118,
            'startColumn' => 33,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler' => 
          array (
            'name' => 'handler',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 118,
                'endLine' => 118,
                'startTokenPos' => 369,
                'startFilePos' => 3142,
                'endTokenPos' => 369,
                'endFilePos' => 3145,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 118,
            'endLine' => 118,
            'startColumn' => 43,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dispatch a command to its appropriate handler in the current process without using the synchronous queue.
 *
 * @param  mixed  $command
 * @param  mixed  $handler
 * @return mixed
 */',
        'startLine' => 118,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'findBatch' => 
      array (
        'name' => 'findBatch',
        'parameters' => 
        array (
          'batchId' => 
          array (
            'name' => 'batchId',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 148,
            'endLine' => 148,
            'startColumn' => 31,
            'endColumn' => 45,
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
 * Attempt to find the batch with the given ID.
 *
 * @return \\Illuminate\\Bus\\Batch|null
 */',
        'startLine' => 148,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'batch' => 
      array (
        'name' => 'batch',
        'parameters' => 
        array (
          'jobs' => 
          array (
            'name' => 'jobs',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 159,
            'endLine' => 159,
            'startColumn' => 27,
            'endColumn' => 31,
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
 * Create a new batch of queueable jobs.
 *
 * @param  \\Illuminate\\Support\\Collection|mixed  $jobs
 * @return \\Illuminate\\Bus\\PendingBatch
 */',
        'startLine' => 159,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'chain' => 
      array (
        'name' => 'chain',
        'parameters' => 
        array (
          'jobs' => 
          array (
            'name' => 'jobs',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 170,
                'endLine' => 170,
                'startTokenPos' => 691,
                'startFilePos' => 4804,
                'endTokenPos' => 691,
                'endFilePos' => 4807,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 27,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new chain of queueable jobs.
 *
 * @param  \\Illuminate\\Support\\Collection|array|null  $jobs
 * @return \\Illuminate\\Foundation\\Bus\\PendingChain
 */',
        'startLine' => 170,
        'endLine' => 176,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'hasCommandHandler' => 
      array (
        'name' => 'hasCommandHandler',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 39,
            'endColumn' => 46,
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
 * Determine if the given command has a handler.
 *
 * @param  mixed  $command
 * @return bool
 */',
        'startLine' => 184,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'getCommandHandler' => 
      array (
        'name' => 'getCommandHandler',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 39,
            'endColumn' => 46,
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
 * Retrieve the handler for a command.
 *
 * @param  mixed  $command
 * @return mixed
 */',
        'startLine' => 195,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'commandShouldBeQueued' => 
      array (
        'name' => 'commandShouldBeQueued',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 210,
            'endLine' => 210,
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
 * Determine if the given command should be queued.
 *
 * @param  mixed  $command
 * @return bool
 */',
        'startLine' => 210,
        'endLine' => 213,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatchToQueue' => 
      array (
        'name' => 'dispatchToQueue',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 37,
            'endColumn' => 44,
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
 * Dispatch a command to its appropriate handler behind a queue.
 *
 * @param  mixed  $command
 * @return mixed
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 223,
        'endLine' => 240,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'pushCommandToQueue' => 
      array (
        'name' => 'pushCommandToQueue',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 249,
            'endLine' => 249,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 249,
            'endLine' => 249,
            'startColumn' => 51,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Push the command onto the given queue instance.
 *
 * @param  \\Illuminate\\Contracts\\Queue\\Queue  $queue
 * @param  mixed  $command
 * @return mixed
 */',
        'startLine' => 249,
        'endLine' => 262,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatchAfterResponse' => 
      array (
        'name' => 'dispatchAfterResponse',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler' => 
          array (
            'name' => 'handler',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 271,
                'endLine' => 271,
                'startTokenPos' => 1117,
                'startFilePos' => 7558,
                'endTokenPos' => 1117,
                'endFilePos' => 7561,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 53,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dispatch a command to its appropriate handler after the current process.
 *
 * @param  mixed  $command
 * @param  mixed  $handler
 * @return void
 */',
        'startLine' => 271,
        'endLine' => 282,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'pipeThrough' => 
      array (
        'name' => 'pipeThrough',
        'parameters' => 
        array (
          'pipes' => 
          array (
            'name' => 'pipes',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 289,
            'endLine' => 289,
            'startColumn' => 33,
            'endColumn' => 44,
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
 * Set the pipes through which commands should be piped before dispatching.
 *
 * @return $this
 */',
        'startLine' => 289,
        'endLine' => 294,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'map' => 
      array (
        'name' => 'map',
        'parameters' => 
        array (
          'map' => 
          array (
            'name' => 'map',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 25,
            'endColumn' => 34,
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
 * Map a command to a handler.
 *
 * @return $this
 */',
        'startLine' => 301,
        'endLine' => 306,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'withDispatchingAfterResponses' => 
      array (
        'name' => 'withDispatchingAfterResponses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Allow dispatching after responses.
 *
 * @return $this
 */',
        'startLine' => 313,
        'endLine' => 318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'withoutDispatchingAfterResponses' => 
      array (
        'name' => 'withoutDispatchingAfterResponses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disable dispatching after responses.
 *
 * @return $this
 */',
        'startLine' => 325,
        'endLine' => 330,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
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