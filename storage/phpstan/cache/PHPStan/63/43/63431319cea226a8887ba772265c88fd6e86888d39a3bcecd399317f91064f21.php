<?php declare(strict_types = 1);

// osfsl-/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Database/Migrations/MigrationCreator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Migrations\MigrationCreator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-392cef7902239dc053270c55dc8cc1c062da2e4771d10bd4d4db706ee562045e-8.4.19-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Database/Migrations/MigrationCreator.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Migrations',
    'name' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
    'shortName' => 'MigrationCreator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 230,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
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
      'files' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'name' => 'files',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The filesystem instance.
 *
 * @var \\Illuminate\\Filesystem\\Filesystem
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'customStubPath' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'name' => 'customStubPath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom app stubs directory.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'postCreate' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'name' => 'postCreate',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 55,
            'startFilePos' => 561,
            'endTokenPos' => 56,
            'endFilePos' => 562,
          ),
        ),
        'docComment' => '/**
 * The registered post create hooks.
 *
 * @var (\\Closure(string, string): void)[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 31,
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
          'files' => 
          array (
            'name' => 'files',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Filesystem\\Filesystem',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'customStubPath' => 
          array (
            'name' => 'customStubPath',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 52,
            'endColumn' => 66,
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
 * Create a new migration creator instance.
 *
 * @param  \\Illuminate\\Filesystem\\Filesystem  $files
 * @param  string  $customStubPath
 */',
        'startLine' => 39,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
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
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 28,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 35,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 56,
                'endLine' => 56,
                'startTokenPos' => 115,
                'startFilePos' => 1193,
                'endTokenPos' => 115,
                'endFilePos' => 1196,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'create' => 
          array (
            'name' => 'create',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 56,
                'endLine' => 56,
                'startTokenPos' => 122,
                'startFilePos' => 1209,
                'endTokenPos' => 122,
                'endFilePos' => 1213,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 57,
            'endColumn' => 71,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new migration at the given path.
 *
 * @param  string  $name
 * @param  string  $path
 * @param  string|null  $table
 * @param  bool  $create
 * @return string
 *
 * @throws \\Exception
 */',
        'startLine' => 56,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'ensureMigrationDoesntAlreadyExist' => 
      array (
        'name' => 'ensureMigrationDoesntAlreadyExist',
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
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 58,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'migrationPath' => 
          array (
            'name' => 'migrationPath',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 90,
                'endLine' => 90,
                'startTokenPos' => 249,
                'startFilePos' => 2438,
                'endTokenPos' => 249,
                'endFilePos' => 2441,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 65,
            'endColumn' => 85,
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
 * Ensure that a migration with the given name doesn\'t already exist.
 *
 * @param  string  $name
 * @param  string|null  $migrationPath
 * @return void
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 90,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'getStub' => 
      array (
        'name' => 'getStub',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 112,
            'endLine' => 112,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'create' => 
          array (
            'name' => 'create',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 112,
            'endLine' => 112,
            'startColumn' => 40,
            'endColumn' => 46,
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
 * Get the migration stub file.
 *
 * @param  string|null  $table
 * @param  bool  $create
 * @return string
 */',
        'startLine' => 112,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'populateStub' => 
      array (
        'name' => 'populateStub',
        'parameters' => 
        array (
          'stub' => 
          array (
            'name' => 'stub',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 138,
            'endLine' => 138,
            'startColumn' => 37,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 138,
            'endLine' => 138,
            'startColumn' => 44,
            'endColumn' => 49,
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
 * Populate the place-holders in the migration stub.
 *
 * @param  string  $stub
 * @param  string|null  $table
 * @return string
 */',
        'startLine' => 138,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'getClassName' => 
      array (
        'name' => 'getClassName',
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
            'startLine' => 159,
            'endLine' => 159,
            'startColumn' => 37,
            'endColumn' => 41,
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
 * Get the class name of a migration name.
 *
 * @param  string  $name
 * @return class-string<\\Illuminate\\Database\\Migrations\\Migration>
 */',
        'startLine' => 159,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'getPath' => 
      array (
        'name' => 'getPath',
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
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 39,
            'endColumn' => 43,
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
 * Get the full path to the migration.
 *
 * @param  string  $name
 * @param  string  $path
 * @return string
 */',
        'startLine' => 171,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'firePostCreateHooks' => 
      array (
        'name' => 'firePostCreateHooks',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 52,
            'endColumn' => 56,
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
 * Fire the registered post create hooks.
 *
 * @param  string|null  $table
 * @param  string  $path
 * @return void
 */',
        'startLine' => 183,
        'endLine' => 188,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'afterCreate' => 
      array (
        'name' => 'afterCreate',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 196,
            'endLine' => 196,
            'startColumn' => 33,
            'endColumn' => 49,
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
 * Register a post migration create hook.
 *
 * @param  (\\Closure(string, string): void)  $callback
 * @return void
 */',
        'startLine' => 196,
        'endLine' => 199,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'getDatePrefix' => 
      array (
        'name' => 'getDatePrefix',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the date prefix for the migration.
 *
 * @return string
 */',
        'startLine' => 206,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'stubPath' => 
      array (
        'name' => 'stubPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the stubs.
 *
 * @return string
 */',
        'startLine' => 216,
        'endLine' => 219,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'aliasName' => NULL,
      ),
      'getFilesystem' => 
      array (
        'name' => 'getFilesystem',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the filesystem instance.
 *
 * @return \\Illuminate\\Filesystem\\Filesystem
 */',
        'startLine' => 226,
        'endLine' => 229,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Migrations',
        'declaringClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'implementingClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
        'currentClassName' => 'Illuminate\\Database\\Migrations\\MigrationCreator',
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