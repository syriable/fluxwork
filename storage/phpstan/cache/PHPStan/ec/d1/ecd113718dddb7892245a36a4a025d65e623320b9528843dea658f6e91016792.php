<?php declare(strict_types = 1);

// odsl-/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Buyer.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Users\Models\Buyer
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.4.19-2d0a5f1b913aac6feaaad80e3afa82318823daddbeb1a018d26366841d76a16f',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Users\\Models\\Buyer',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Buyer.php',
      ),
    ),
    'namespace' => 'Modules\\Users\\Models',
    'name' => 'Modules\\Users\\Models\\Buyer',
    'shortName' => 'Buyer',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @property AccountState $account_state
 * @property Carbon|null $suspended_at
 * @property string|null $suspension_reason
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '[\'username\', \'display_name\', \'email\', \'password\', \'suspended_at\', \'suspension_reason\', \'last_login_at\', \'last_login_ip\']',
            'attributes' => 
            array (
              'startLine' => 20,
              'endLine' => 20,
              'startTokenPos' => 55,
              'startFilePos' => 513,
              'endTokenPos' => 78,
              'endFilePos' => 632,
            ),
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\'password\'',
            'attributes' => 
            array (
              'startLine' => 21,
              'endLine' => 21,
              'startTokenPos' => 85,
              'startFilePos' => 645,
              'endTokenPos' => 85,
              'endFilePos' => 654,
            ),
          ),
          1 => 
          array (
            'code' => '\'remember_token\'',
            'attributes' => 
            array (
              'startLine' => 21,
              'endLine' => 21,
              'startTokenPos' => 88,
              'startFilePos' => 657,
              'endTokenPos' => 88,
              'endFilePos' => 672,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 20,
    'endLine' => 43,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'App\\Models\\User',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'casts' => 
      array (
        'name' => 'casts',
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
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */',
        'startLine' => 32,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Modules\\Users\\Models',
        'declaringClassName' => 'Modules\\Users\\Models\\Buyer',
        'implementingClassName' => 'Modules\\Users\\Models\\Buyer',
        'currentClassName' => 'Modules\\Users\\Models\\Buyer',
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