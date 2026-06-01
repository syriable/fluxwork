<?php declare(strict_types = 1);

// odsl-/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/AdminFactory.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Users\Database\Factories\AdminFactory
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.4.19-bb463657413451a49a7fcd62f2baa5ff4829c3a36967bcdf0cbffdbe02d22c13',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/AdminFactory.php',
      ),
    ),
    'namespace' => 'Modules\\Users\\Database\\Factories',
    'name' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
    'shortName' => 'AdminFactory',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @extends Factory<Admin>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 82,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
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
      'model' => 
      array (
        'declaringClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'implementingClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'name' => 'model',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\Modules\\Users\\Models\\Admin::class',
          'attributes' => 
          array (
            'startLine' => 21,
            'endLine' => 21,
            'startTokenPos' => 52,
            'startFilePos' => 447,
            'endTokenPos' => 54,
            'endFilePos' => 458,
          ),
        ),
        'docComment' => '/**
 * The name of the factory\'s corresponding model.
 *
 * @var class-string<Admin>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'password' => 
      array (
        'declaringClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'implementingClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'name' => 'password',
        'modifiers' => 18,
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'default' => NULL,
        'docComment' => '/**
 * The current password being used by the factory.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 39,
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
      'definition' => 
      array (
        'name' => 'definition',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define the model\'s default state.
 *
 * @return array<string, mixed>
 */',
        'startLine' => 33,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Users\\Database\\Factories',
        'declaringClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'implementingClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'currentClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'aliasName' => NULL,
      ),
      'unverified' => 
      array (
        'name' => 'unverified',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the model\'s email address should be unverified.
 */',
        'startLine' => 53,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Users\\Database\\Factories',
        'declaringClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'implementingClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'currentClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'aliasName' => NULL,
      ),
      'suspended' => 
      array (
        'name' => 'suspended',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 60,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Users\\Database\\Factories',
        'declaringClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'implementingClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'currentClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'aliasName' => NULL,
      ),
      'lastLogin' => 
      array (
        'name' => 'lastLogin',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 68,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Users\\Database\\Factories',
        'declaringClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'implementingClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'currentClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'aliasName' => NULL,
      ),
      'active' => 
      array (
        'name' => 'active',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 76,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Users\\Database\\Factories',
        'declaringClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'implementingClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
        'currentClassName' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
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