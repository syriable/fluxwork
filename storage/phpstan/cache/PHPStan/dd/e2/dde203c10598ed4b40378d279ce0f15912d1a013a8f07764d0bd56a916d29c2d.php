<?php declare(strict_types = 1);

// osfsl-/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../orchestra/canvas-core/src/PresetManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Orchestra\Canvas\Core\PresetManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a1e429fd5523a5c13466813e78ffadc88a33cf1b9f5dec554fe128125f011038-8.4.19-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../orchestra/canvas-core/src/PresetManager.php',
      ),
    ),
    'namespace' => 'Orchestra\\Canvas\\Core',
    'name' => 'Orchestra\\Canvas\\Core\\PresetManager',
    'shortName' => 'PresetManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 43,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Manager',
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
      'defaultPreset' => 
      array (
        'declaringClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'implementingClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'name' => 'defaultPreset',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'laravel\'',
          'attributes' => 
          array (
            'startLine' => 12,
            'endLine' => 12,
            'startTokenPos' => 32,
            'startFilePos' => 198,
            'endTokenPos' => 32,
            'endFilePos' => 206,
          ),
        ),
        'docComment' => '/**
 * The default driver name.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 5,
        'endColumn' => 48,
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
      'createLaravelDriver' => 
      array (
        'name' => 'createLaravelDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Orchestra\\Canvas\\Core\\Presets\\Laravel',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create "laravel" driver.
 */',
        'startLine' => 17,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Orchestra\\Canvas\\Core',
        'declaringClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'implementingClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'currentClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'aliasName' => NULL,
      ),
      'setDefaultDriver' => 
      array (
        'name' => 'setDefaultDriver',
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
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 38,
            'endColumn' => 42,
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
 * Set the default driver name.
 *
 * @param  string  $name
 * @return void
 */',
        'startLine' => 29,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Orchestra\\Canvas\\Core',
        'declaringClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'implementingClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'currentClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'aliasName' => NULL,
      ),
      'getDefaultDriver' => 
      array (
        'name' => 'getDefaultDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default driver name.
 *
 * @return string
 */',
        'startLine' => 39,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Orchestra\\Canvas\\Core',
        'declaringClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'implementingClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
        'currentClassName' => 'Orchestra\\Canvas\\Core\\PresetManager',
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