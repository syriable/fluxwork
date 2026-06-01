<?php declare(strict_types = 1);

// odsl-/Users/ghiath/Desktop/sites/fluxwork/app/Rules/NotEffectivelyBlank.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Rules\NotEffectivelyBlank
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.4.19-f3f79b9e55b2142db08544b3939487ac10f492800e02cebb84fe925445ff36da',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Rules\\NotEffectivelyBlank',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/app/Rules/NotEffectivelyBlank.php',
      ),
    ),
    'namespace' => 'App\\Rules',
    'name' => 'App\\Rules\\NotEffectivelyBlank',
    'shortName' => 'NotEffectivelyBlank',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 65568,
    'docComment' => '/**
 * Rejects values that are visually empty — i.e., contain only Unicode
 * whitespace, line/paragraph separators, or format characters (zero-width
 * joiners, bidi controls, soft hyphens, etc.).
 *
 * Use alongside `required` when you also need to guard against inputs
 * that look like content but render as nothing.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 42,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Validation\\ValidationRule',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'INVISIBLE_PATTERN' => 
      array (
        'declaringClassName' => 'App\\Rules\\NotEffectivelyBlank',
        'implementingClassName' => 'App\\Rules\\NotEffectivelyBlank',
        'name' => 'INVISIBLE_PATTERN',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'value' => 
        array (
          'code' => '\'/[\\p{Z}\\p{Cf}\\s]/u\'',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 58,
            'startFilePos' => 967,
            'endTokenPos' => 58,
            'endFilePos' => 986,
          ),
        ),
        'docComment' => '/**
 * Matches any character that is invisible when rendered:
 *   \\p{Z}  — all Unicode space separators (incl. U+00A0, U+2000–U+200A, U+202F, U+205F, U+3000)
 *   \\p{Cf} — format characters (ZWJ, ZWNJ, RLM/LRM, soft hyphen, etc.)
 *   \\s     — ASCII whitespace plus U+2028 / U+2029 line/para separators under /u
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 66,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
          'attribute' => 
          array (
            'name' => 'attribute',
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 30,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 49,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'fail' => 
          array (
            'name' => 'fail',
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 63,
            'endColumn' => 75,
            'parameterIndex' => 2,
            'isOptional' => false,
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
 * @param  Closure(string): PotentiallyTranslatedString  $fail
 */',
        'startLine' => 32,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Rules',
        'declaringClassName' => 'App\\Rules\\NotEffectivelyBlank',
        'implementingClassName' => 'App\\Rules\\NotEffectivelyBlank',
        'currentClassName' => 'App\\Rules\\NotEffectivelyBlank',
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