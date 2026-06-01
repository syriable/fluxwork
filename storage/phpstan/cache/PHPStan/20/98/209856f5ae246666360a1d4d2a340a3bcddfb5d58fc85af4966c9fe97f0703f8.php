<?php declare(strict_types = 1);

// osfsl-/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/eloquent-sortable/src/Sortable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\EloquentSortable\Sortable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-99a9ecda0aff4746376edee29fa0633ccc4735a936af6dd4944dd4b79dbec426-8.4.19-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\EloquentSortable\\Sortable',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/eloquent-sortable/src/Sortable.php',
      ),
    ),
    'namespace' => 'Spatie\\EloquentSortable',
    'name' => 'Spatie\\EloquentSortable\\Sortable',
    'shortName' => 'Sortable',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 36,
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
    ),
    'immediateMethods' => 
    array (
      'setHighestOrderNumber' => 
      array (
        'name' => 'setHighestOrderNumber',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Modify the order column value.
 */',
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\EloquentSortable',
        'declaringClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'implementingClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'currentClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'aliasName' => NULL,
      ),
      'scopeOrdered' => 
      array (
        'name' => 'scopeOrdered',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 34,
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
 * Let\'s be nice and provide an ordered scope.
 *
 * @param \\Illuminate\\Database\\Eloquent\\Builder $query
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\EloquentSortable',
        'declaringClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'implementingClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'currentClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'aliasName' => NULL,
      ),
      'setNewOrder' => 
      array (
        'name' => 'setNewOrder',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 40,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'startOrder' => 
          array (
            'name' => 'startOrder',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 30,
                'endLine' => 30,
                'startTokenPos' => 65,
                'startFilePos' => 769,
                'endTokenPos' => 65,
                'endFilePos' => 769,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 46,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * This function reorders the records: the record with the first id in the array
 * will get order 1, the record with the second it will get order 2,...
 *
 * @param array|\\ArrayAccess $ids
 * @param int $startOrder
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Spatie\\EloquentSortable',
        'declaringClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'implementingClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'currentClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'aliasName' => NULL,
      ),
      'shouldSortWhenCreating' => 
      array (
        'name' => 'shouldSortWhenCreating',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the order column should be set when saving a new model instance.
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\EloquentSortable',
        'declaringClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'implementingClassName' => 'Spatie\\EloquentSortable\\Sortable',
        'currentClassName' => 'Spatie\\EloquentSortable\\Sortable',
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