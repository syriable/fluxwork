<?php declare(strict_types = 1);

// osfsl-/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Mail/Markdown.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Mail\Markdown
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7c740bcd51d70515d29e57846de253981f8c0f8cd7f188cdde11d974ea2cd403-8.4.19-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Mail\\Markdown',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Mail/Markdown.php',
      ),
    ),
    'namespace' => 'Illuminate\\Mail',
    'name' => 'Illuminate\\Mail\\Markdown',
    'shortName' => 'Markdown',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 307,
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
      'view' => 
      array (
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'name' => 'view',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The view factory implementation.
 *
 * @var \\Illuminate\\Contracts\\View\\Factory
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'theme' => 
      array (
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'name' => 'theme',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'default\'',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 77,
            'startFilePos' => 733,
            'endTokenPos' => 77,
            'endFilePos' => 741,
          ),
        ),
        'docComment' => '/**
 * The current theme being used when generating emails.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'componentPaths' => 
      array (
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'name' => 'componentPaths',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 88,
            'startFilePos' => 857,
            'endTokenPos' => 89,
            'endFilePos' => 858,
          ),
        ),
        'docComment' => '/**
 * The registered component paths.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'withSecuredEncoding' => 
      array (
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'name' => 'withSecuredEncoding',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 102,
            'startFilePos' => 1001,
            'endTokenPos' => 102,
            'endFilePos' => 1005,
          ),
        ),
        'docComment' => '/**
 * Indicates if secure encoding should be enabled.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 50,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'extensions' => 
      array (
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'name' => 'extensions',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 115,
            'startFilePos' => 1198,
            'endTokenPos' => 116,
            'endFilePos' => 1199,
          ),
        ),
        'docComment' => '/**
 * The registered CommonMark extensions.
 *
 * @var array<int, class-string<\\League\\CommonMark\\Extension\\ExtensionInterface>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 38,
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
          'view' => 
          array (
            'name' => 'view',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\View\\Factory',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 58,
                'endLine' => 58,
                'startTokenPos' => 138,
                'startFilePos' => 1430,
                'endTokenPos' => 139,
                'endFilePos' => 1431,
              ),
            ),
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
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 52,
            'endColumn' => 70,
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
 * Create a new Markdown renderer instance.
 *
 * @param  \\Illuminate\\Contracts\\View\\Factory  $view
 * @param  array  $options
 */',
        'startLine' => 58,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'render' => 
      array (
        'name' => 'render',
        'parameters' => 
        array (
          'view' => 
          array (
            'name' => 'view',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 75,
            'endLine' => 75,
            'startColumn' => 28,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 75,
                'endLine' => 75,
                'startTokenPos' => 221,
                'startFilePos' => 1953,
                'endTokenPos' => 222,
                'endFilePos' => 1954,
              ),
            ),
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
            'startLine' => 75,
            'endLine' => 75,
            'startColumn' => 35,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'inliner' => 
          array (
            'name' => 'inliner',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 75,
                'endLine' => 75,
                'startTokenPos' => 229,
                'startFilePos' => 1968,
                'endTokenPos' => 229,
                'endFilePos' => 1971,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 75,
            'endLine' => 75,
            'startColumn' => 53,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Render the Markdown template into HTML.
 *
 * @param  string  $view
 * @param  array  $data
 * @param  \\TijsVerkoyen\\CssToInlineStyles\\CssToInlineStyles|null  $inliner
 * @return \\Illuminate\\Support\\HtmlString
 */',
        'startLine' => 75,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'renderText' => 
      array (
        'name' => 'renderText',
        'parameters' => 
        array (
          'view' => 
          array (
            'name' => 'view',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 131,
            'endLine' => 131,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 131,
                'endLine' => 131,
                'startTokenPos' => 586,
                'startFilePos' => 3842,
                'endTokenPos' => 587,
                'endFilePos' => 3843,
              ),
            ),
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
            'startLine' => 131,
            'endLine' => 131,
            'startColumn' => 39,
            'endColumn' => 54,
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
 * Render the Markdown template into text.
 *
 * @param  string  $view
 * @param  array  $data
 * @return \\Illuminate\\Support\\HtmlString
 */',
        'startLine' => 131,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'parse' => 
      array (
        'name' => 'parse',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'encoded' => 
          array (
            'name' => 'encoded',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 151,
                'endLine' => 151,
                'startTokenPos' => 687,
                'startFilePos' => 4417,
                'endTokenPos' => 687,
                'endFilePos' => 4421,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 41,
            'endColumn' => 61,
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
 * Parse the given Markdown text into HTML.
 *
 * @param  string  $text
 * @param  bool  $encoded
 * @return \\Illuminate\\Support\\HtmlString
 */',
        'startLine' => 151,
        'endLine' => 181,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'converter' => 
      array (
        'name' => 'converter',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 191,
                'endLine' => 191,
                'startTokenPos' => 916,
                'startFilePos' => 5552,
                'endTokenPos' => 917,
                'endFilePos' => 5553,
              ),
            ),
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
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 38,
            'endColumn' => 55,
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
 * Get a Markdown converter instance.
 *
 * @internal
 *
 * @param  array<string, mixed>  $config
 * @return \\League\\CommonMark\\MarkdownConverter
 */',
        'startLine' => 191,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'htmlComponentPaths' => 
      array (
        'name' => 'htmlComponentPaths',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the HTML component paths.
 *
 * @return array
 */',
        'startLine' => 212,
        'endLine' => 217,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'textComponentPaths' => 
      array (
        'name' => 'textComponentPaths',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the text component paths.
 *
 * @return array
 */',
        'startLine' => 224,
        'endLine' => 229,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'componentPaths' => 
      array (
        'name' => 'componentPaths',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the component paths.
 *
 * @return array
 */',
        'startLine' => 236,
        'endLine' => 241,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'loadComponentsFrom' => 
      array (
        'name' => 'loadComponentsFrom',
        'parameters' => 
        array (
          'paths' => 
          array (
            'name' => 'paths',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 249,
                'endLine' => 249,
                'startTokenPos' => 1146,
                'startFilePos' => 6908,
                'endTokenPos' => 1147,
                'endFilePos' => 6909,
              ),
            ),
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
            'startLine' => 249,
            'endLine' => 249,
            'startColumn' => 40,
            'endColumn' => 56,
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
 * Register new mail component paths.
 *
 * @param  array  $paths
 * @return void
 */',
        'startLine' => 249,
        'endLine' => 252,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'theme' => 
      array (
        'name' => 'theme',
        'parameters' => 
        array (
          'theme' => 
          array (
            'name' => 'theme',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Set the default theme to be used.
 *
 * @param  string  $theme
 * @return $this
 */',
        'startLine' => 260,
        'endLine' => 265,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'getTheme' => 
      array (
        'name' => 'getTheme',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the theme currently being used by the renderer.
 *
 * @return string
 */',
        'startLine' => 272,
        'endLine' => 275,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'withSecuredEncoding' => 
      array (
        'name' => 'withSecuredEncoding',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enable secured encoding when parsing Markdown.
 *
 * @return void
 */',
        'startLine' => 282,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'withoutSecuredEncoding' => 
      array (
        'name' => 'withoutSecuredEncoding',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disable secured encoding when parsing Markdown.
 *
 * @return void
 */',
        'startLine' => 292,
        'endLine' => 295,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
        'aliasName' => NULL,
      ),
      'flushState' => 
      array (
        'name' => 'flushState',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Flush the class\'s global state.
 *
 * @return void
 */',
        'startLine' => 302,
        'endLine' => 306,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Mail',
        'declaringClassName' => 'Illuminate\\Mail\\Markdown',
        'implementingClassName' => 'Illuminate\\Mail\\Markdown',
        'currentClassName' => 'Illuminate\\Mail\\Markdown',
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