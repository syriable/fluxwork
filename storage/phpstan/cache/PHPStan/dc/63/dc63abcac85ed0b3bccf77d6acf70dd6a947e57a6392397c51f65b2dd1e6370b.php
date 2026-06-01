<?php declare(strict_types = 1);

// osfsl-/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Concurrency/ConcurrencyManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Concurrency\ConcurrencyManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ff17de7e335874ed1001c2cfaefacb636f74c2feb03b0ef88f92ec97b2e27e29-8.4.19-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Concurrency/ConcurrencyManager.php',
      ),
    ),
    'namespace' => 'Illuminate\\Concurrency',
    'name' => 'Illuminate\\Concurrency\\ConcurrencyManager',
    'shortName' => 'ConcurrencyManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @mixin \\Illuminate\\Contracts\\Concurrency\\Driver
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 104,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\MultipleInstanceManager',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'driver' => 
      array (
        'name' => 'driver',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 23,
                'endLine' => 23,
                'startTokenPos' => 62,
                'startFilePos' => 509,
                'endTokenPos' => 62,
                'endFilePos' => 512,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 28,
            'endColumn' => 39,
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
 * Get a driver instance by name.
 *
 * @param  \\UnitEnum|string|null  $name
 * @return mixed
 */',
        'startLine' => 23,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Concurrency',
        'declaringClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'implementingClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'currentClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'aliasName' => NULL,
      ),
      'createProcessDriver' => 
      array (
        'name' => 'createProcessDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create an instance of the process concurrency driver.
 *
 * @return \\Illuminate\\Concurrency\\ProcessDriver
 */',
        'startLine' => 33,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Concurrency',
        'declaringClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'implementingClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'currentClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'aliasName' => NULL,
      ),
      'createForkDriver' => 
      array (
        'name' => 'createForkDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create an instance of the fork concurrency driver.
 *
 * @return \\Illuminate\\Concurrency\\ForkDriver
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 45,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Concurrency',
        'declaringClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'implementingClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'currentClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'aliasName' => NULL,
      ),
      'createSyncDriver' => 
      array (
        'name' => 'createSyncDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create an instance of the sync concurrency driver.
 *
 * @return \\Illuminate\\Concurrency\\SyncDriver
 */',
        'startLine' => 63,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Concurrency',
        'declaringClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'implementingClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'currentClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'aliasName' => NULL,
      ),
      'getDefaultInstance' => 
      array (
        'name' => 'getDefaultInstance',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default instance name.
 *
 * @return string
 */',
        'startLine' => 73,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Concurrency',
        'declaringClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'implementingClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'currentClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'aliasName' => NULL,
      ),
      'setDefaultInstance' => 
      array (
        'name' => 'setDefaultInstance',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 40,
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
 * Set the default instance name.
 *
 * @param  string  $name
 * @return void
 */',
        'startLine' => 86,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Concurrency',
        'declaringClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'implementingClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'currentClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'aliasName' => NULL,
      ),
      'getInstanceConfig' => 
      array (
        'name' => 'getInstanceConfig',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 98,
            'endLine' => 98,
            'startColumn' => 39,
            'endColumn' => 43,
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
 * Get the instance specific configuration.
 *
 * @param  string  $name
 * @return array
 */',
        'startLine' => 98,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Concurrency',
        'declaringClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'implementingClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
        'currentClassName' => 'Illuminate\\Concurrency\\ConcurrencyManager',
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