<?php declare(strict_types = 1);

// osfsl-/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Testing/TestResponse.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Testing\TestResponse
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-9f4840478984eecbfbedf888504b85378fdae7519bec42c606a25a22f4480cd7-8.4.19-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Testing\\TestResponse',
        'filename' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework/src/Illuminate/Testing/TestResponse.php',
      ),
    ),
    'namespace' => 'Illuminate\\Testing',
    'name' => 'Illuminate\\Testing\\TestResponse',
    'shortName' => 'TestResponse',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @template TResponse of \\Symfony\\Component\\HttpFoundation\\Response
 *
 * @mixin \\Illuminate\\Http\\Response
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 37,
    'endLine' => 2078,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'ArrayAccess',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Testing\\Concerns\\AssertsStatusCodes',
      1 => 'Illuminate\\Support\\Traits\\Conditionable',
      2 => 'Illuminate\\Support\\Traits\\Dumpable',
      3 => 'Illuminate\\Support\\Traits\\Tappable',
      4 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'baseRequest' => 
      array (
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'name' => 'baseRequest',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The original request.
 *
 * @var \\Illuminate\\Http\\Request|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'baseResponse' => 
      array (
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'name' => 'baseResponse',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The response to delegate to.
 *
 * @var TResponse
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'exceptions' => 
      array (
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'name' => 'exceptions',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The collection of logged exceptions for the request.
 *
 * @var \\Illuminate\\Support\\Collection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'streamedContent' => 
      array (
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'name' => 'streamedContent',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The streamed content of the response.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
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
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 33,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 77,
                'endLine' => 77,
                'startTokenPos' => 227,
                'startFilePos' => 2072,
                'endTokenPos' => 227,
                'endFilePos' => 2075,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
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
 * Create a new test response instance.
 *
 * @param  TResponse  $response
 * @param  \\Illuminate\\Http\\Request|null  $request
 */',
        'startLine' => 77,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'fromBaseResponse' => 
      array (
        'name' => 'fromBaseResponse',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 93,
            'endLine' => 93,
            'startColumn' => 45,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 93,
                'endLine' => 93,
                'startTokenPos' => 280,
                'startFilePos' => 2507,
                'endTokenPos' => 280,
                'endFilePos' => 2510,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 93,
            'endLine' => 93,
            'startColumn' => 56,
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
 * Create a new TestResponse from another response.
 *
 * @template R of TResponse
 *
 * @param  R  $response
 * @param  \\Illuminate\\Http\\Request|null  $request
 * @return static<R>
 */',
        'startLine' => 93,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSuccessful' => 
      array (
        'name' => 'assertSuccessful',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that the response has a successful status code.
 *
 * @return $this
 */',
        'startLine' => 103,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSuccessfulPrecognition' => 
      array (
        'name' => 'assertSuccessfulPrecognition',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that the Precognition request was successful.
 *
 * @return $this
 */',
        'startLine' => 118,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertClientError' => 
      array (
        'name' => 'assertClientError',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that the response is a client error.
 *
 * @return $this
 */',
        'startLine' => 141,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertServerError' => 
      array (
        'name' => 'assertServerError',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that the response is a server error.
 *
 * @return $this
 */',
        'startLine' => 156,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertStatus' => 
      array (
        'name' => 'assertStatus',
        'parameters' => 
        array (
          'status' => 
          array (
            'name' => 'status',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 172,
            'endLine' => 172,
            'startColumn' => 34,
            'endColumn' => 40,
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
 * Assert that the response has the given status code.
 *
 * @param  int  $status
 * @return $this
 */',
        'startLine' => 172,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'statusMessageWithDetails' => 
      array (
        'name' => 'statusMessageWithDetails',
        'parameters' => 
        array (
          'expected' => 
          array (
            'name' => 'expected',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 49,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'actual' => 
          array (
            'name' => 'actual',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 60,
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
 * Get an assertion message for a status assertion containing extra details when available.
 *
 * @param  string|int  $expected
 * @param  string|int  $actual
 * @return string
 */',
        'startLine' => 188,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertRedirect' => 
      array (
        'name' => 'assertRedirect',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 199,
                'endLine' => 199,
                'startTokenPos' => 645,
                'startFilePos' => 5224,
                'endTokenPos' => 645,
                'endFilePos' => 5227,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 199,
            'endLine' => 199,
            'startColumn' => 36,
            'endColumn' => 46,
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
 * Assert whether the response is redirecting to a given URI.
 *
 * @param  string|null  $uri
 * @return $this
 */',
        'startLine' => 199,
        'endLine' => 211,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertRedirectContains' => 
      array (
        'name' => 'assertRedirectContains',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 219,
            'endLine' => 219,
            'startColumn' => 44,
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
 * Assert whether the response is redirecting to a URI that contains the given URI.
 *
 * @param  string  $uri
 * @return $this
 */',
        'startLine' => 219,
        'endLine' => 231,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertRedirectBack' => 
      array (
        'name' => 'assertRedirectBack',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert whether the response is redirecting back to the previous location.
 *
 * @return $this
 */',
        'startLine' => 238,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertRedirectBackWithErrors' => 
      array (
        'name' => 'assertRedirectBackWithErrors',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 258,
                'endLine' => 258,
                'startTokenPos' => 899,
                'startFilePos' => 6969,
                'endTokenPos' => 900,
                'endFilePos' => 6970,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 50,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 258,
                'endLine' => 258,
                'startTokenPos' => 907,
                'startFilePos' => 6983,
                'endTokenPos' => 907,
                'endFilePos' => 6986,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 62,
            'endColumn' => 75,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'errorBag' => 
          array (
            'name' => 'errorBag',
            'default' => 
            array (
              'code' => '\'default\'',
              'attributes' => 
              array (
                'startLine' => 258,
                'endLine' => 258,
                'startTokenPos' => 914,
                'startFilePos' => 7001,
                'endTokenPos' => 914,
                'endFilePos' => 7009,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 78,
            'endColumn' => 98,
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
 * Assert whether the response is redirecting back to the previous location with the given errors in the session.
 *
 * @param  string|array  $keys
 * @param  mixed  $format
 * @param  string  $errorBag
 * @return $this
 */',
        'startLine' => 258,
        'endLine' => 265,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertRedirectBackWithoutErrors' => 
      array (
        'name' => 'assertRedirectBackWithoutErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert whether the response is redirecting back to the previous location with no errors in the session.
 *
 * @return $this
 */',
        'startLine' => 272,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertRedirectToRoute' => 
      array (
        'name' => 'assertRedirectToRoute',
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
            'startLine' => 288,
            'endLine' => 288,
            'startColumn' => 43,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 288,
                'endLine' => 288,
                'startTokenPos' => 995,
                'startFilePos' => 7728,
                'endTokenPos' => 996,
                'endFilePos' => 7729,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 288,
            'endLine' => 288,
            'startColumn' => 50,
            'endColumn' => 65,
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
 * Assert whether the response is redirecting to a given route.
 *
 * @param  \\BackedEnum|string  $name
 * @param  mixed  $parameters
 * @return $this
 */',
        'startLine' => 288,
        'endLine' => 300,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertRedirectToSignedRoute' => 
      array (
        'name' => 'assertRedirectToSignedRoute',
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
                'startLine' => 310,
                'endLine' => 310,
                'startTokenPos' => 1076,
                'startFilePos' => 8330,
                'endTokenPos' => 1076,
                'endFilePos' => 8333,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 310,
            'endLine' => 310,
            'startColumn' => 49,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 310,
                'endLine' => 310,
                'startTokenPos' => 1083,
                'startFilePos' => 8350,
                'endTokenPos' => 1084,
                'endFilePos' => 8351,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 310,
            'endLine' => 310,
            'startColumn' => 63,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 310,
                'endLine' => 310,
                'startTokenPos' => 1091,
                'startFilePos' => 8366,
                'endTokenPos' => 1091,
                'endFilePos' => 8369,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 310,
            'endLine' => 310,
            'startColumn' => 81,
            'endColumn' => 96,
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
 * Assert whether the response is redirecting to a given signed route.
 *
 * @param  \\BackedEnum|string|null  $name
 * @param  mixed  $parameters
 * @param  bool  $absolute
 * @return $this
 */',
        'startLine' => 310,
        'endLine' => 339,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertRedirectToAction' => 
      array (
        'name' => 'assertRedirectToAction',
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
            'startLine' => 348,
            'endLine' => 348,
            'startColumn' => 44,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 348,
                'endLine' => 348,
                'startTokenPos' => 1298,
                'startFilePos' => 9507,
                'endTokenPos' => 1299,
                'endFilePos' => 9508,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 348,
            'endLine' => 348,
            'startColumn' => 51,
            'endColumn' => 66,
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
 * Assert whether the response is redirecting to a given controller action.
 *
 * @param  string|array  $name
 * @param  array  $parameters
 * @return $this
 */',
        'startLine' => 348,
        'endLine' => 360,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertHeader' => 
      array (
        'name' => 'assertHeader',
        'parameters' => 
        array (
          'headerName' => 
          array (
            'name' => 'headerName',
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
            'startColumn' => 34,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 369,
                'endLine' => 369,
                'startTokenPos' => 1382,
                'startFilePos' => 10077,
                'endTokenPos' => 1382,
                'endFilePos' => 10080,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 369,
            'endLine' => 369,
            'startColumn' => 47,
            'endColumn' => 59,
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
 * Asserts that the response contains the given header and equals the optional value.
 *
 * @param  string  $headerName
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 369,
        'endLine' => 385,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertHeaderContains' => 
      array (
        'name' => 'assertHeaderContains',
        'parameters' => 
        array (
          'headerName' => 
          array (
            'name' => 'headerName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 42,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 55,
            'endColumn' => 60,
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
 * Asserts that the response contains the given header and that its value contains the given string.
 *
 * @param  string  $headerName
 * @param  string  $value
 * @return $this
 */',
        'startLine' => 394,
        'endLine' => 408,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertHeaderMissing' => 
      array (
        'name' => 'assertHeaderMissing',
        'parameters' => 
        array (
          'headerName' => 
          array (
            'name' => 'headerName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 416,
            'endLine' => 416,
            'startColumn' => 41,
            'endColumn' => 51,
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
 * Asserts that the response does not contain the given header.
 *
 * @param  string  $headerName
 * @return $this
 */',
        'startLine' => 416,
        'endLine' => 423,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertLocation' => 
      array (
        'name' => 'assertLocation',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 431,
            'endLine' => 431,
            'startColumn' => 36,
            'endColumn' => 39,
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
 * Assert that the current location header matches the given URI.
 *
 * @param  string  $uri
 * @return $this
 */',
        'startLine' => 431,
        'endLine' => 438,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertDownload' => 
      array (
        'name' => 'assertDownload',
        'parameters' => 
        array (
          'filename' => 
          array (
            'name' => 'filename',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 446,
                'endLine' => 446,
                'startTokenPos' => 1734,
                'startFilePos' => 12297,
                'endTokenPos' => 1734,
                'endFilePos' => 12300,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 36,
            'endColumn' => 51,
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
 * Assert that the response offers a file download.
 *
 * @param  string|null  $filename
 * @return $this
 */',
        'startLine' => 446,
        'endLine' => 486,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertPlainCookie' => 
      array (
        'name' => 'assertPlainCookie',
        'parameters' => 
        array (
          'cookieName' => 
          array (
            'name' => 'cookieName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 495,
            'endLine' => 495,
            'startColumn' => 39,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 495,
                'endLine' => 495,
                'startTokenPos' => 2063,
                'startFilePos' => 14138,
                'endTokenPos' => 2063,
                'endFilePos' => 14141,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 495,
            'endLine' => 495,
            'startColumn' => 52,
            'endColumn' => 64,
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
 * Asserts that the response contains the given cookie and equals the optional value.
 *
 * @param  string  $cookieName
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 495,
        'endLine' => 500,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertCookie' => 
      array (
        'name' => 'assertCookie',
        'parameters' => 
        array (
          'cookieName' => 
          array (
            'name' => 'cookieName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 34,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 511,
                'endLine' => 511,
                'startTokenPos' => 2104,
                'startFilePos' => 14556,
                'endTokenPos' => 2104,
                'endFilePos' => 14559,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 47,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'encrypted' => 
          array (
            'name' => 'encrypted',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 511,
                'endLine' => 511,
                'startTokenPos' => 2111,
                'startFilePos' => 14575,
                'endTokenPos' => 2111,
                'endFilePos' => 14578,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 62,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'unserialize' => 
          array (
            'name' => 'unserialize',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 511,
                'endLine' => 511,
                'startTokenPos' => 2118,
                'startFilePos' => 14596,
                'endTokenPos' => 2118,
                'endFilePos' => 14600,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 81,
            'endColumn' => 100,
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
 * Asserts that the response contains the given cookie and equals the optional value.
 *
 * @param  string  $cookieName
 * @param  mixed  $value
 * @param  bool  $encrypted
 * @param  bool  $unserialize
 * @return $this
 */',
        'startLine' => 511,
        'endLine' => 530,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertCookieExpired' => 
      array (
        'name' => 'assertCookieExpired',
        'parameters' => 
        array (
          'cookieName' => 
          array (
            'name' => 'cookieName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 538,
            'endLine' => 538,
            'startColumn' => 41,
            'endColumn' => 51,
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
 * Asserts that the response contains the given cookie and is expired.
 *
 * @param  string  $cookieName
 * @return $this
 */',
        'startLine' => 538,
        'endLine' => 553,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertCookieNotExpired' => 
      array (
        'name' => 'assertCookieNotExpired',
        'parameters' => 
        array (
          'cookieName' => 
          array (
            'name' => 'cookieName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 561,
            'endLine' => 561,
            'startColumn' => 44,
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
 * Asserts that the response contains the given cookie and is not expired.
 *
 * @param  string  $cookieName
 * @return $this
 */',
        'startLine' => 561,
        'endLine' => 576,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertCookieMissing' => 
      array (
        'name' => 'assertCookieMissing',
        'parameters' => 
        array (
          'cookieName' => 
          array (
            'name' => 'cookieName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 584,
            'endLine' => 584,
            'startColumn' => 41,
            'endColumn' => 51,
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
 * Asserts that the response does not contain the given cookie.
 *
 * @param  string  $cookieName
 * @return $this
 */',
        'startLine' => 584,
        'endLine' => 592,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'getCookie' => 
      array (
        'name' => 'getCookie',
        'parameters' => 
        array (
          'cookieName' => 
          array (
            'name' => 'cookieName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 602,
            'endLine' => 602,
            'startColumn' => 31,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'decrypt' => 
          array (
            'name' => 'decrypt',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 602,
                'endLine' => 602,
                'startTokenPos' => 2567,
                'startFilePos' => 17419,
                'endTokenPos' => 2567,
                'endFilePos' => 17422,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 602,
            'endLine' => 602,
            'startColumn' => 44,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'unserialize' => 
          array (
            'name' => 'unserialize',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 602,
                'endLine' => 602,
                'startTokenPos' => 2574,
                'startFilePos' => 17440,
                'endTokenPos' => 2574,
                'endFilePos' => 17444,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 602,
            'endLine' => 602,
            'startColumn' => 61,
            'endColumn' => 80,
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
 * Get the given cookie from the response.
 *
 * @param  string  $cookieName
 * @param  bool  $decrypt
 * @param  bool  $unserialize
 * @return \\Symfony\\Component\\HttpFoundation\\Cookie|null
 */',
        'startLine' => 602,
        'endLine' => 628,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertContent' => 
      array (
        'name' => 'assertContent',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 636,
            'endLine' => 636,
            'startColumn' => 35,
            'endColumn' => 40,
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
 * Assert that the given string matches the response content.
 *
 * @param  string  $value
 * @return $this
 */',
        'startLine' => 636,
        'endLine' => 641,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertStreamed' => 
      array (
        'name' => 'assertStreamed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that the response was streamed.
 *
 * @return $this
 */',
        'startLine' => 648,
        'endLine' => 656,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertNotStreamed' => 
      array (
        'name' => 'assertNotStreamed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that the response was not streamed.
 *
 * @return $this
 */',
        'startLine' => 663,
        'endLine' => 671,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertStreamedContent' => 
      array (
        'name' => 'assertStreamedContent',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 679,
            'endLine' => 679,
            'startColumn' => 43,
            'endColumn' => 48,
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
 * Assert that the given string matches the streamed response content.
 *
 * @param  string  $value
 * @return $this
 */',
        'startLine' => 679,
        'endLine' => 684,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertStreamedJsonContent' => 
      array (
        'name' => 'assertStreamedJsonContent',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 692,
            'endLine' => 692,
            'startColumn' => 47,
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
 * Assert that the given array matches the streamed JSON response content.
 *
 * @param  array  $value
 * @return $this
 */',
        'startLine' => 692,
        'endLine' => 695,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSee' => 
      array (
        'name' => 'assertSee',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 704,
            'endLine' => 704,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'escape' => 
          array (
            'name' => 'escape',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 704,
                'endLine' => 704,
                'startTokenPos' => 2976,
                'startFilePos' => 20306,
                'endTokenPos' => 2976,
                'endFilePos' => 20309,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 704,
            'endLine' => 704,
            'startColumn' => 39,
            'endColumn' => 52,
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
 * Assert that the given string or array of strings are contained within the response.
 *
 * @param  string|list<string>  $value
 * @param  bool  $escape
 * @return $this
 */',
        'startLine' => 704,
        'endLine' => 715,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSeeHtml' => 
      array (
        'name' => 'assertSeeHtml',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 723,
            'endLine' => 723,
            'startColumn' => 35,
            'endColumn' => 40,
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
 * Assert that the given HTML string or array of HTML strings are contained within the response.
 *
 * @param  string|list<string>  $value
 * @return $this
 */',
        'startLine' => 723,
        'endLine' => 726,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSeeInOrder' => 
      array (
        'name' => 'assertSeeInOrder',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 735,
            'endLine' => 735,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'escape' => 
          array (
            'name' => 'escape',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 735,
                'endLine' => 735,
                'startTokenPos' => 3105,
                'startFilePos' => 21150,
                'endTokenPos' => 3105,
                'endFilePos' => 21153,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 735,
            'endLine' => 735,
            'startColumn' => 53,
            'endColumn' => 66,
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
 * Assert that the given strings are contained in order within the response.
 *
 * @param  list<string>  $values
 * @param  bool  $escape
 * @return $this
 */',
        'startLine' => 735,
        'endLine' => 742,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSeeHtmlInOrder' => 
      array (
        'name' => 'assertSeeHtmlInOrder',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 750,
            'endLine' => 750,
            'startColumn' => 42,
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
 * Assert that the given HTML strings are contained in order within the response.
 *
 * @param  list<string>  $values
 * @return $this
 */',
        'startLine' => 750,
        'endLine' => 753,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSeeText' => 
      array (
        'name' => 'assertSeeText',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 762,
            'endLine' => 762,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'escape' => 
          array (
            'name' => 'escape',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 762,
                'endLine' => 762,
                'startTokenPos' => 3211,
                'startFilePos' => 21911,
                'endTokenPos' => 3211,
                'endFilePos' => 21914,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 762,
            'endLine' => 762,
            'startColumn' => 43,
            'endColumn' => 56,
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
 * Assert that the given string or array of strings are contained within the response text.
 *
 * @param  string|list<string>  $value
 * @param  bool  $escape
 * @return $this
 */',
        'startLine' => 762,
        'endLine' => 771,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSeeTextInOrder' => 
      array (
        'name' => 'assertSeeTextInOrder',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 780,
            'endLine' => 780,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'escape' => 
          array (
            'name' => 'escape',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 780,
                'endLine' => 780,
                'startTokenPos' => 3301,
                'startFilePos' => 22412,
                'endTokenPos' => 3301,
                'endFilePos' => 22415,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 780,
            'endLine' => 780,
            'startColumn' => 57,
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
 * Assert that the given strings are contained in order within the response text.
 *
 * @param  list<string>  $values
 * @param  bool  $escape
 * @return $this
 */',
        'startLine' => 780,
        'endLine' => 787,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertDontSee' => 
      array (
        'name' => 'assertDontSee',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 796,
            'endLine' => 796,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'escape' => 
          array (
            'name' => 'escape',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 796,
                'endLine' => 796,
                'startTokenPos' => 3380,
                'startFilePos' => 22885,
                'endTokenPos' => 3380,
                'endFilePos' => 22888,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 796,
            'endLine' => 796,
            'startColumn' => 43,
            'endColumn' => 56,
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
 * Assert that the given string or array of strings are not contained within the response.
 *
 * @param  string|list<string>  $value
 * @param  bool  $escape
 * @return $this
 */',
        'startLine' => 796,
        'endLine' => 807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertDontSeeHtml' => 
      array (
        'name' => 'assertDontSeeHtml',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 815,
            'endLine' => 815,
            'startColumn' => 39,
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
 * Assert that the given HTML string or array of HTML strings are not contained within the response.
 *
 * @param  string|list<string>  $value
 * @return $this
 */',
        'startLine' => 815,
        'endLine' => 818,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertDontSeeText' => 
      array (
        'name' => 'assertDontSeeText',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'escape' => 
          array (
            'name' => 'escape',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 827,
                'endLine' => 827,
                'startTokenPos' => 3507,
                'startFilePos' => 23763,
                'endTokenPos' => 3507,
                'endFilePos' => 23766,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 47,
            'endColumn' => 60,
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
 * Assert that the given string or array of strings are not contained within the response text.
 *
 * @param  string|list<string>  $value
 * @param  bool  $escape
 * @return $this
 */',
        'startLine' => 827,
        'endLine' => 836,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJson' => 
      array (
        'name' => 'assertJson',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 845,
            'endLine' => 845,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 845,
                'endLine' => 845,
                'startTokenPos' => 3601,
                'startFilePos' => 24241,
                'endTokenPos' => 3601,
                'endFilePos' => 24245,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 845,
            'endLine' => 845,
            'startColumn' => 40,
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
 * Assert that the response is a superset of the given JSON.
 *
 * @param  array|callable  $value
 * @param  bool  $strict
 * @return $this
 */',
        'startLine' => 845,
        'endLine' => 862,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonPath' => 
      array (
        'name' => 'assertJsonPath',
        'parameters' => 
        array (
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
            'startLine' => 871,
            'endLine' => 871,
            'startColumn' => 36,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expect' => 
          array (
            'name' => 'expect',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 871,
            'endLine' => 871,
            'startColumn' => 43,
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
 * Assert that the expected value and type exists at the given path in the response.
 *
 * @param  string  $path
 * @param  mixed  $expect
 * @return $this
 */',
        'startLine' => 871,
        'endLine' => 876,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonPaths' => 
      array (
        'name' => 'assertJsonPaths',
        'parameters' => 
        array (
          'paths' => 
          array (
            'name' => 'paths',
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
            'startLine' => 883,
            'endLine' => 883,
            'startColumn' => 37,
            'endColumn' => 48,
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
 * Assert that the expected values and types exist at the given paths in the response.
 *
 * @return $this
 */',
        'startLine' => 883,
        'endLine' => 890,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonPathsCanonicalizing' => 
      array (
        'name' => 'assertJsonPathsCanonicalizing',
        'parameters' => 
        array (
          'paths' => 
          array (
            'name' => 'paths',
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
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 51,
            'endColumn' => 62,
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
 * Assert that the given paths in the response contain all of the expected values without looking at the order.
 *
 * @return $this
 */',
        'startLine' => 897,
        'endLine' => 904,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonPathCanonicalizing' => 
      array (
        'name' => 'assertJsonPathCanonicalizing',
        'parameters' => 
        array (
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
            'startLine' => 913,
            'endLine' => 913,
            'startColumn' => 50,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expect' => 
          array (
            'name' => 'expect',
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
            'startLine' => 913,
            'endLine' => 913,
            'startColumn' => 57,
            'endColumn' => 69,
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
 * Assert that the given path in the response contains all of the expected values without looking at the order.
 *
 * @param  string  $path
 * @param  array  $expect
 * @return $this
 */',
        'startLine' => 913,
        'endLine' => 918,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertExactJson' => 
      array (
        'name' => 'assertExactJson',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 926,
            'endLine' => 926,
            'startColumn' => 37,
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
 * Assert that the response has the exact given JSON.
 *
 * @param  array  $data
 * @return $this
 */',
        'startLine' => 926,
        'endLine' => 931,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSimilarJson' => 
      array (
        'name' => 'assertSimilarJson',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 939,
            'endLine' => 939,
            'startColumn' => 39,
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
 * Assert that the response has the similar JSON as given.
 *
 * @param  array  $data
 * @return $this
 */',
        'startLine' => 939,
        'endLine' => 944,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonFragments' => 
      array (
        'name' => 'assertJsonFragments',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 952,
            'endLine' => 952,
            'startColumn' => 41,
            'endColumn' => 51,
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
 * Assert that the response contains the given JSON fragments.
 *
 * @param  array  $data
 * @return $this
 */',
        'startLine' => 952,
        'endLine' => 959,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonFragment' => 
      array (
        'name' => 'assertJsonFragment',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 967,
            'endLine' => 967,
            'startColumn' => 40,
            'endColumn' => 50,
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
 * Assert that the response contains the given JSON fragment.
 *
 * @param  array  $data
 * @return $this
 */',
        'startLine' => 967,
        'endLine' => 972,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonMissing' => 
      array (
        'name' => 'assertJsonMissing',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 981,
            'endLine' => 981,
            'startColumn' => 39,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exact' => 
          array (
            'name' => 'exact',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 981,
                'endLine' => 981,
                'startTokenPos' => 4041,
                'startFilePos' => 27514,
                'endTokenPos' => 4041,
                'endFilePos' => 27518,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 981,
            'endLine' => 981,
            'startColumn' => 52,
            'endColumn' => 65,
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
 * Assert that the response does not contain the given JSON fragment.
 *
 * @param  array  $data
 * @param  bool  $exact
 * @return $this
 */',
        'startLine' => 981,
        'endLine' => 986,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonMissingExact' => 
      array (
        'name' => 'assertJsonMissingExact',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 994,
            'endLine' => 994,
            'startColumn' => 44,
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
 * Assert that the response does not contain the exact JSON fragment.
 *
 * @param  array  $data
 * @return $this
 */',
        'startLine' => 994,
        'endLine' => 999,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonMissingPath' => 
      array (
        'name' => 'assertJsonMissingPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
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
            'startLine' => 1007,
            'endLine' => 1007,
            'startColumn' => 43,
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
 * Assert that the response does not contain the given path.
 *
 * @param  string  $path
 * @return $this
 */',
        'startLine' => 1007,
        'endLine' => 1012,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonMissingPaths' => 
      array (
        'name' => 'assertJsonMissingPaths',
        'parameters' => 
        array (
          'paths' => 
          array (
            'name' => 'paths',
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
            'startLine' => 1019,
            'endLine' => 1019,
            'startColumn' => 44,
            'endColumn' => 55,
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
 * Assert that the response does not contain the given paths.
 *
 * @return $this
 */',
        'startLine' => 1019,
        'endLine' => 1026,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonStructure' => 
      array (
        'name' => 'assertJsonStructure',
        'parameters' => 
        array (
          'structure' => 
          array (
            'name' => 'structure',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1035,
                'endLine' => 1035,
                'startTokenPos' => 4195,
                'startFilePos' => 28760,
                'endTokenPos' => 4195,
                'endFilePos' => 28763,
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
                      'name' => 'array',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1035,
            'endLine' => 1035,
            'startColumn' => 41,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'responseData' => 
          array (
            'name' => 'responseData',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1035,
                'endLine' => 1035,
                'startTokenPos' => 4205,
                'startFilePos' => 28789,
                'endTokenPos' => 4205,
                'endFilePos' => 28792,
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
                      'name' => 'array',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1035,
            'endLine' => 1035,
            'startColumn' => 67,
            'endColumn' => 93,
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
 * Assert that the response has a given JSON structure.
 *
 * @param  array|null  $structure
 * @param  array|null  $responseData
 * @return $this
 */',
        'startLine' => 1035,
        'endLine' => 1040,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertExactJsonStructure' => 
      array (
        'name' => 'assertExactJsonStructure',
        'parameters' => 
        array (
          'structure' => 
          array (
            'name' => 'structure',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1049,
                'endLine' => 1049,
                'startTokenPos' => 4247,
                'startFilePos' => 29162,
                'endTokenPos' => 4247,
                'endFilePos' => 29165,
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
                      'name' => 'array',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1049,
            'endLine' => 1049,
            'startColumn' => 46,
            'endColumn' => 69,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'responseData' => 
          array (
            'name' => 'responseData',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1049,
                'endLine' => 1049,
                'startTokenPos' => 4257,
                'startFilePos' => 29191,
                'endTokenPos' => 4257,
                'endFilePos' => 29194,
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
                      'name' => 'array',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1049,
            'endLine' => 1049,
            'startColumn' => 72,
            'endColumn' => 98,
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
 * Assert that the response has the exact JSON structure.
 *
 * @param  array|null  $structure
 * @param  array|null  $responseData
 * @return $this
 */',
        'startLine' => 1049,
        'endLine' => 1054,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonCount' => 
      array (
        'name' => 'assertJsonCount',
        'parameters' => 
        array (
          'count' => 
          array (
            'name' => 'count',
            'default' => NULL,
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
            'startLine' => 1063,
            'endLine' => 1063,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1063,
                'endLine' => 1063,
                'startTokenPos' => 4304,
                'startFilePos' => 29566,
                'endTokenPos' => 4304,
                'endFilePos' => 29569,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1063,
            'endLine' => 1063,
            'startColumn' => 49,
            'endColumn' => 59,
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
 * Assert that the response JSON has the expected count of items at the given key.
 *
 * @param  int  $count
 * @param  string|null  $key
 * @return $this
 */',
        'startLine' => 1063,
        'endLine' => 1068,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonValidationErrors' => 
      array (
        'name' => 'assertJsonValidationErrors',
        'parameters' => 
        array (
          'errors' => 
          array (
            'name' => 'errors',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1077,
            'endLine' => 1077,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'responseKey' => 
          array (
            'name' => 'responseKey',
            'default' => 
            array (
              'code' => '\'errors\'',
              'attributes' => 
              array (
                'startLine' => 1077,
                'endLine' => 1077,
                'startTokenPos' => 4346,
                'startFilePos' => 29930,
                'endTokenPos' => 4346,
                'endFilePos' => 29937,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1077,
            'endLine' => 1077,
            'startColumn' => 57,
            'endColumn' => 79,
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
 * Assert that the response has the given JSON validation errors.
 *
 * @param  string|array  $errors
 * @param  string  $responseKey
 * @return $this
 */',
        'startLine' => 1077,
        'endLine' => 1119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertOnlyJsonValidationErrors' => 
      array (
        'name' => 'assertOnlyJsonValidationErrors',
        'parameters' => 
        array (
          'errors' => 
          array (
            'name' => 'errors',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1128,
            'endLine' => 1128,
            'startColumn' => 52,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'responseKey' => 
          array (
            'name' => 'responseKey',
            'default' => 
            array (
              'code' => '\'errors\'',
              'attributes' => 
              array (
                'startLine' => 1128,
                'endLine' => 1128,
                'startTokenPos' => 4632,
                'startFilePos' => 31762,
                'endTokenPos' => 4632,
                'endFilePos' => 31769,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1128,
            'endLine' => 1128,
            'startColumn' => 61,
            'endColumn' => 83,
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
 * Assert that the response has the given JSON validation errors but does not have any other JSON validation errors.
 *
 * @param  string|array  $errors
 * @param  string  $responseKey
 * @return $this
 */',
        'startLine' => 1128,
        'endLine' => 1146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonValidationErrorFor' => 
      array (
        'name' => 'assertJsonValidationErrorFor',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1155,
            'endLine' => 1155,
            'startColumn' => 50,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'responseKey' => 
          array (
            'name' => 'responseKey',
            'default' => 
            array (
              'code' => '\'errors\'',
              'attributes' => 
              array (
                'startLine' => 1155,
                'endLine' => 1155,
                'startTokenPos' => 4818,
                'startFilePos' => 32677,
                'endTokenPos' => 4818,
                'endFilePos' => 32684,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1155,
            'endLine' => 1155,
            'startColumn' => 56,
            'endColumn' => 78,
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
 * Assert the response has any JSON validation errors for the given key.
 *
 * @param  string  $key
 * @param  string  $responseKey
 * @return $this
 */',
        'startLine' => 1155,
        'endLine' => 1171,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonMissingValidationErrors' => 
      array (
        'name' => 'assertJsonMissingValidationErrors',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1180,
                'endLine' => 1180,
                'startTokenPos' => 4937,
                'startFilePos' => 33577,
                'endTokenPos' => 4937,
                'endFilePos' => 33580,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1180,
            'endLine' => 1180,
            'startColumn' => 55,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'responseKey' => 
          array (
            'name' => 'responseKey',
            'default' => 
            array (
              'code' => '\'errors\'',
              'attributes' => 
              array (
                'startLine' => 1180,
                'endLine' => 1180,
                'startTokenPos' => 4944,
                'startFilePos' => 33598,
                'endTokenPos' => 4944,
                'endFilePos' => 33605,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1180,
            'endLine' => 1180,
            'startColumn' => 69,
            'endColumn' => 91,
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
 * Assert that the response has no JSON validation errors for the given keys.
 *
 * @param  string|array|null  $keys
 * @param  string  $responseKey
 * @return $this
 */',
        'startLine' => 1180,
        'endLine' => 1213,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonIsArray' => 
      array (
        'name' => 'assertJsonIsArray',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1221,
                'endLine' => 1221,
                'startTokenPos' => 5181,
                'startFilePos' => 34731,
                'endTokenPos' => 5181,
                'endFilePos' => 34734,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1221,
            'endLine' => 1221,
            'startColumn' => 39,
            'endColumn' => 49,
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
 * Assert that the given key is a JSON array.
 *
 * @param  string|null  $key
 * @return $this
 */',
        'startLine' => 1221,
        'endLine' => 1234,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertJsonIsObject' => 
      array (
        'name' => 'assertJsonIsObject',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1242,
                'endLine' => 1242,
                'startTokenPos' => 5265,
                'startFilePos' => 35214,
                'endTokenPos' => 5265,
                'endFilePos' => 35217,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1242,
            'endLine' => 1242,
            'startColumn' => 40,
            'endColumn' => 50,
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
 * Assert that the given key is a JSON object.
 *
 * @param  string|null  $key
 * @return $this
 */',
        'startLine' => 1242,
        'endLine' => 1255,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'decodeResponseJson' => 
      array (
        'name' => 'decodeResponseJson',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validate the decoded response JSON.
 *
 * @return \\Illuminate\\Testing\\AssertableJsonString
 *
 * @throws \\Throwable
 */',
        'startLine' => 1264,
        'endLine' => 1284,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'json' => 
      array (
        'name' => 'json',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1292,
                'endLine' => 1292,
                'startTokenPos' => 5502,
                'startFilePos' => 36550,
                'endTokenPos' => 5502,
                'endFilePos' => 36553,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1292,
            'endLine' => 1292,
            'startColumn' => 26,
            'endColumn' => 36,
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
 * Return the decoded response JSON.
 *
 * @param  string|null  $key
 * @return mixed
 */',
        'startLine' => 1292,
        'endLine' => 1295,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'collect' => 
      array (
        'name' => 'collect',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1303,
                'endLine' => 1303,
                'startTokenPos' => 5535,
                'startFilePos' => 36828,
                'endTokenPos' => 5535,
                'endFilePos' => 36831,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1303,
            'endLine' => 1303,
            'startColumn' => 29,
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
 * Get the decoded JSON body of the response as a collection.
 *
 * @param  string|null  $key
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 1303,
        'endLine' => 1306,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertViewIs' => 
      array (
        'name' => 'assertViewIs',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1314,
            'endLine' => 1314,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Assert that the response view equals the given value.
 *
 * @param  string  $value
 * @return $this
 */',
        'startLine' => 1314,
        'endLine' => 1321,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertViewHas' => 
      array (
        'name' => 'assertViewHas',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1330,
            'endLine' => 1330,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1330,
                'endLine' => 1330,
                'startTokenPos' => 5621,
                'startFilePos' => 37461,
                'endTokenPos' => 5621,
                'endFilePos' => 37464,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1330,
            'endLine' => 1330,
            'startColumn' => 41,
            'endColumn' => 53,
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
 * Assert that the response view has a given piece of bound data.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 1330,
        'endLine' => 1356,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertViewHasAll' => 
      array (
        'name' => 'assertViewHasAll',
        'parameters' => 
        array (
          'bindings' => 
          array (
            'name' => 'bindings',
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
            'startLine' => 1364,
            'endLine' => 1364,
            'startColumn' => 38,
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
 * Assert that the response view has a given list of bound data.
 *
 * @param  array  $bindings
 * @return $this
 */',
        'startLine' => 1364,
        'endLine' => 1375,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'viewData' => 
      array (
        'name' => 'viewData',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1383,
                'endLine' => 1383,
                'startTokenPos' => 6034,
                'startFilePos' => 39532,
                'endTokenPos' => 6034,
                'endFilePos' => 39535,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1383,
            'endLine' => 1383,
            'startColumn' => 30,
            'endColumn' => 40,
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
 * Get a piece of data from the original view.
 *
 * @param  string|null  $key
 * @return mixed
 */',
        'startLine' => 1383,
        'endLine' => 1394,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertViewMissing' => 
      array (
        'name' => 'assertViewMissing',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1402,
            'endLine' => 1402,
            'startColumn' => 39,
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
 * Assert that the response view is missing a piece of bound data.
 *
 * @param  string  $key
 * @return $this
 */',
        'startLine' => 1402,
        'endLine' => 1409,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'ensureResponseHasView' => 
      array (
        'name' => 'ensureResponseHasView',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure that the response has a view as its original content.
 *
 * @return $this
 */',
        'startLine' => 1416,
        'endLine' => 1423,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'responseHasView' => 
      array (
        'name' => 'responseHasView',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the original response is a view.
 *
 * @return bool
 */',
        'startLine' => 1430,
        'endLine' => 1433,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertValid' => 
      array (
        'name' => 'assertValid',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1443,
                'endLine' => 1443,
                'startTokenPos' => 6237,
                'startFilePos' => 40911,
                'endTokenPos' => 6237,
                'endFilePos' => 40914,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1443,
            'endLine' => 1443,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'errorBag' => 
          array (
            'name' => 'errorBag',
            'default' => 
            array (
              'code' => '\'default\'',
              'attributes' => 
              array (
                'startLine' => 1443,
                'endLine' => 1443,
                'startTokenPos' => 6244,
                'startFilePos' => 40929,
                'endTokenPos' => 6244,
                'endFilePos' => 40937,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1443,
            'endLine' => 1443,
            'startColumn' => 47,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'responseKey' => 
          array (
            'name' => 'responseKey',
            'default' => 
            array (
              'code' => '\'errors\'',
              'attributes' => 
              array (
                'startLine' => 1443,
                'endLine' => 1443,
                'startTokenPos' => 6251,
                'startFilePos' => 40955,
                'endTokenPos' => 6251,
                'endFilePos' => 40962,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1443,
            'endLine' => 1443,
            'startColumn' => 70,
            'endColumn' => 92,
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
 * Assert that the given keys do not have validation errors.
 *
 * @param  string|array|null  $keys
 * @param  string  $errorBag
 * @param  string  $responseKey
 * @return $this
 */',
        'startLine' => 1443,
        'endLine' => 1476,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertInvalid' => 
      array (
        'name' => 'assertInvalid',
        'parameters' => 
        array (
          'errors' => 
          array (
            'name' => 'errors',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1486,
                'endLine' => 1486,
                'startTokenPos' => 6509,
                'startFilePos' => 42308,
                'endTokenPos' => 6509,
                'endFilePos' => 42311,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1486,
            'endLine' => 1486,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'errorBag' => 
          array (
            'name' => 'errorBag',
            'default' => 
            array (
              'code' => '\'default\'',
              'attributes' => 
              array (
                'startLine' => 1487,
                'endLine' => 1487,
                'startTokenPos' => 6516,
                'startFilePos' => 42360,
                'endTokenPos' => 6516,
                'endFilePos' => 42368,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1487,
            'endLine' => 1487,
            'startColumn' => 35,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'responseKey' => 
          array (
            'name' => 'responseKey',
            'default' => 
            array (
              'code' => '\'errors\'',
              'attributes' => 
              array (
                'startLine' => 1488,
                'endLine' => 1488,
                'startTokenPos' => 6523,
                'startFilePos' => 42420,
                'endTokenPos' => 6523,
                'endFilePos' => 42427,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1488,
            'endLine' => 1488,
            'startColumn' => 35,
            'endColumn' => 57,
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
 * Assert that the response has the given validation errors.
 *
 * @param  string|array|null  $errors
 * @param  string  $errorBag
 * @param  string  $responseKey
 * @return $this
 */',
        'startLine' => 1486,
        'endLine' => 1532,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertOnlyInvalid' => 
      array (
        'name' => 'assertOnlyInvalid',
        'parameters' => 
        array (
          'errors' => 
          array (
            'name' => 'errors',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1542,
                'endLine' => 1542,
                'startTokenPos' => 6857,
                'startFilePos' => 44528,
                'endTokenPos' => 6857,
                'endFilePos' => 44531,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1542,
            'endLine' => 1542,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'errorBag' => 
          array (
            'name' => 'errorBag',
            'default' => 
            array (
              'code' => '\'default\'',
              'attributes' => 
              array (
                'startLine' => 1542,
                'endLine' => 1542,
                'startTokenPos' => 6864,
                'startFilePos' => 44546,
                'endTokenPos' => 6864,
                'endFilePos' => 44554,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1542,
            'endLine' => 1542,
            'startColumn' => 55,
            'endColumn' => 75,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'responseKey' => 
          array (
            'name' => 'responseKey',
            'default' => 
            array (
              'code' => '\'errors\'',
              'attributes' => 
              array (
                'startLine' => 1542,
                'endLine' => 1542,
                'startTokenPos' => 6871,
                'startFilePos' => 44572,
                'endTokenPos' => 6871,
                'endFilePos' => 44579,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1542,
            'endLine' => 1542,
            'startColumn' => 78,
            'endColumn' => 100,
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
 * Assert that the response has the given validation errors but does not have any other validation errors.
 *
 * @param  string|array|null  $errors
 * @param  string  $errorBag
 * @param  string  $responseKey
 * @return $this
 */',
        'startLine' => 1542,
        'endLine' => 1566,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSessionHas' => 
      array (
        'name' => 'assertSessionHas',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1575,
            'endLine' => 1575,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1575,
                'endLine' => 1575,
                'startTokenPos' => 7093,
                'startFilePos' => 45652,
                'endTokenPos' => 7093,
                'endFilePos' => 45655,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1575,
            'endLine' => 1575,
            'startColumn' => 44,
            'endColumn' => 56,
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
 * Assert that the session has a given value.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 1575,
        'endLine' => 1593,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSessionHasAll' => 
      array (
        'name' => 'assertSessionHasAll',
        'parameters' => 
        array (
          'bindings' => 
          array (
            'name' => 'bindings',
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
            'startLine' => 1601,
            'endLine' => 1601,
            'startColumn' => 41,
            'endColumn' => 55,
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
 * Assert that the session has a given list of values.
 *
 * @param  array  $bindings
 * @return $this
 */',
        'startLine' => 1601,
        'endLine' => 1622,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSessionHasInput' => 
      array (
        'name' => 'assertSessionHasInput',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1631,
            'endLine' => 1631,
            'startColumn' => 43,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1631,
                'endLine' => 1631,
                'startTokenPos' => 7427,
                'startFilePos' => 47271,
                'endTokenPos' => 7427,
                'endFilePos' => 47274,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1631,
            'endLine' => 1631,
            'startColumn' => 49,
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
 * Assert that the session has a given value in the flashed input array.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 1631,
        'endLine' => 1657,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSessionMissingInput' => 
      array (
        'name' => 'assertSessionMissingInput',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1665,
            'endLine' => 1665,
            'startColumn' => 47,
            'endColumn' => 50,
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
 * Assert that the session is missing a given key in the flashed input array.
 *
 * @param  string|array  $key
 * @return $this
 */',
        'startLine' => 1665,
        'endLine' => 1681,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSessionHasErrors' => 
      array (
        'name' => 'assertSessionHasErrors',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1691,
                'endLine' => 1691,
                'startTokenPos' => 7734,
                'startFilePos' => 48939,
                'endTokenPos' => 7735,
                'endFilePos' => 48940,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1691,
            'endLine' => 1691,
            'startColumn' => 44,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1691,
                'endLine' => 1691,
                'startTokenPos' => 7742,
                'startFilePos' => 48953,
                'endTokenPos' => 7742,
                'endFilePos' => 48956,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1691,
            'endLine' => 1691,
            'startColumn' => 56,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'errorBag' => 
          array (
            'name' => 'errorBag',
            'default' => 
            array (
              'code' => '\'default\'',
              'attributes' => 
              array (
                'startLine' => 1691,
                'endLine' => 1691,
                'startTokenPos' => 7749,
                'startFilePos' => 48971,
                'endTokenPos' => 7749,
                'endFilePos' => 48979,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1691,
            'endLine' => 1691,
            'startColumn' => 72,
            'endColumn' => 92,
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
 * Assert that the session has the given errors.
 *
 * @param  string|array  $keys
 * @param  mixed  $format
 * @param  string  $errorBag
 * @return $this
 */',
        'startLine' => 1691,
        'endLine' => 1708,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSessionDoesntHaveErrors' => 
      array (
        'name' => 'assertSessionDoesntHaveErrors',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1718,
                'endLine' => 1718,
                'startTokenPos' => 7909,
                'startFilePos' => 49800,
                'endTokenPos' => 7910,
                'endFilePos' => 49801,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1718,
            'endLine' => 1718,
            'startColumn' => 51,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1718,
                'endLine' => 1718,
                'startTokenPos' => 7917,
                'startFilePos' => 49814,
                'endTokenPos' => 7917,
                'endFilePos' => 49817,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1718,
            'endLine' => 1718,
            'startColumn' => 63,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'errorBag' => 
          array (
            'name' => 'errorBag',
            'default' => 
            array (
              'code' => '\'default\'',
              'attributes' => 
              array (
                'startLine' => 1718,
                'endLine' => 1718,
                'startTokenPos' => 7924,
                'startFilePos' => 49832,
                'endTokenPos' => 7924,
                'endFilePos' => 49840,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1718,
            'endLine' => 1718,
            'startColumn' => 79,
            'endColumn' => 99,
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
 * Assert that the session is missing the given errors.
 *
 * @param  string|array  $keys
 * @param  string|null  $format
 * @param  string  $errorBag
 * @return $this
 */',
        'startLine' => 1718,
        'endLine' => 1743,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSessionHasNoErrors' => 
      array (
        'name' => 'assertSessionHasNoErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that the session has no errors.
 *
 * @return $this
 */',
        'startLine' => 1750,
        'endLine' => 1775,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSessionHasErrorsIn' => 
      array (
        'name' => 'assertSessionHasErrorsIn',
        'parameters' => 
        array (
          'errorBag' => 
          array (
            'name' => 'errorBag',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1785,
            'endLine' => 1785,
            'startColumn' => 46,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'keys' => 
          array (
            'name' => 'keys',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1785,
                'endLine' => 1785,
                'startTokenPos' => 8329,
                'startFilePos' => 51858,
                'endTokenPos' => 8330,
                'endFilePos' => 51859,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1785,
            'endLine' => 1785,
            'startColumn' => 57,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1785,
                'endLine' => 1785,
                'startTokenPos' => 8337,
                'startFilePos' => 51872,
                'endTokenPos' => 8337,
                'endFilePos' => 51875,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1785,
            'endLine' => 1785,
            'startColumn' => 69,
            'endColumn' => 82,
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
 * Assert that the session has the given errors.
 *
 * @param  string  $errorBag
 * @param  string|array  $keys
 * @param  mixed  $format
 * @return $this
 */',
        'startLine' => 1785,
        'endLine' => 1788,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'assertSessionMissing' => 
      array (
        'name' => 'assertSessionMissing',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1797,
            'endLine' => 1797,
            'startColumn' => 42,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1797,
                'endLine' => 1797,
                'startTokenPos' => 8375,
                'startFilePos' => 52185,
                'endTokenPos' => 8375,
                'endFilePos' => 52188,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1797,
            'endLine' => 1797,
            'startColumn' => 48,
            'endColumn' => 60,
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
 * Assert that the session does not have a given key.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 1797,
        'endLine' => 1819,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'session' => 
      array (
        'name' => 'session',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current session store.
 *
 * @return \\Illuminate\\Session\\Store
 */',
        'startLine' => 1826,
        'endLine' => 1835,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'ddHeaders' => 
      array (
        'name' => 'ddHeaders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the headers from the response and end the script.
 *
 * @return never
 */',
        'startLine' => 1842,
        'endLine' => 1847,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'ddBody' => 
      array (
        'name' => 'ddBody',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1855,
                'endLine' => 1855,
                'startTokenPos' => 8634,
                'startFilePos' => 53527,
                'endTokenPos' => 8634,
                'endFilePos' => 53530,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1855,
            'endLine' => 1855,
            'startColumn' => 28,
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
 * Dump the body of the response and end the script.
 *
 * @param  string|null  $key
 * @return never
 */',
        'startLine' => 1855,
        'endLine' => 1864,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'ddJson' => 
      array (
        'name' => 'ddJson',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1872,
                'endLine' => 1872,
                'startTokenPos' => 8691,
                'startFilePos' => 53867,
                'endTokenPos' => 8691,
                'endFilePos' => 53870,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1872,
            'endLine' => 1872,
            'startColumn' => 28,
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
 * Dump the JSON payload from the response and end the script.
 *
 * @param  string|null  $key
 * @return never
 */',
        'startLine' => 1872,
        'endLine' => 1875,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'ddSession' => 
      array (
        'name' => 'ddSession',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1883,
                'endLine' => 1883,
                'startTokenPos' => 8721,
                'startFilePos' => 54096,
                'endTokenPos' => 8722,
                'endFilePos' => 54097,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1883,
            'endLine' => 1883,
            'startColumn' => 31,
            'endColumn' => 40,
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
 * Dump the session from the response and end the script.
 *
 * @param  string|array  $keys
 * @return never
 */',
        'startLine' => 1883,
        'endLine' => 1888,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'dump' => 
      array (
        'name' => 'dump',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1896,
                'endLine' => 1896,
                'startTokenPos' => 8755,
                'startFilePos' => 54318,
                'endTokenPos' => 8755,
                'endFilePos' => 54321,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1896,
            'endLine' => 1896,
            'startColumn' => 26,
            'endColumn' => 36,
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
 * Dump the content from the response.
 *
 * @param  string|null  $key
 * @return $this
 */',
        'startLine' => 1896,
        'endLine' => 1913,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'dumpHeaders' => 
      array (
        'name' => 'dumpHeaders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the headers from the response.
 *
 * @return $this
 */',
        'startLine' => 1920,
        'endLine' => 1925,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'dumpSession' => 
      array (
        'name' => 'dumpSession',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1933,
                'endLine' => 1933,
                'startTokenPos' => 8893,
                'startFilePos' => 55021,
                'endTokenPos' => 8894,
                'endFilePos' => 55022,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1933,
            'endLine' => 1933,
            'startColumn' => 33,
            'endColumn' => 42,
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
 * Dump the session from the response.
 *
 * @param  string|array  $keys
 * @return $this
 */',
        'startLine' => 1933,
        'endLine' => 1944,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'streamedContent' => 
      array (
        'name' => 'streamedContent',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the streamed content from the response.
 *
 * @return string
 */',
        'startLine' => 1951,
        'endLine' => 1973,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'withExceptions' => 
      array (
        'name' => 'withExceptions',
        'parameters' => 
        array (
          'exceptions' => 
          array (
            'name' => 'exceptions',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Support\\Collection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1981,
            'endLine' => 1981,
            'startColumn' => 36,
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
 * Set the previous exceptions on the response.
 *
 * @param  \\Illuminate\\Support\\Collection  $exceptions
 * @return $this
 */',
        'startLine' => 1981,
        'endLine' => 1986,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1994,
            'endLine' => 1994,
            'startColumn' => 27,
            'endColumn' => 30,
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
 * Dynamically access base response parameters.
 *
 * @param  string  $key
 * @return mixed
 */',
        'startLine' => 1994,
        'endLine' => 1997,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      '__isset' => 
      array (
        'name' => '__isset',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2005,
            'endLine' => 2005,
            'startColumn' => 29,
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
 * Proxy isset() checks to the underlying base response.
 *
 * @param  string  $key
 * @return bool
 */',
        'startLine' => 2005,
        'endLine' => 2008,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'offsetExists' => 
      array (
        'name' => 'offsetExists',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2016,
            'endLine' => 2016,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
 * Determine if the given offset exists.
 *
 * @param  string  $offset
 * @return bool
 */',
        'startLine' => 2016,
        'endLine' => 2021,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'offsetGet' => 
      array (
        'name' => 'offsetGet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2029,
            'endLine' => 2029,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value for a given offset.
 *
 * @param  string  $offset
 * @return mixed
 */',
        'startLine' => 2029,
        'endLine' => 2034,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'offsetSet' => 
      array (
        'name' => 'offsetSet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2045,
            'endLine' => 2045,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2045,
            'endLine' => 2045,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 1,
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
 * Set the value at the given offset.
 *
 * @param  string  $offset
 * @param  mixed  $value
 * @return void
 *
 * @throws \\LogicException
 */',
        'startLine' => 2045,
        'endLine' => 2048,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      'offsetUnset' => 
      array (
        'name' => 'offsetUnset',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2058,
            'endLine' => 2058,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
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
 * Unset the value at the given offset.
 *
 * @param  string  $offset
 * @return void
 *
 * @throws \\LogicException
 */',
        'startLine' => 2058,
        'endLine' => 2061,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2070,
            'endLine' => 2070,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2070,
            'endLine' => 2070,
            'startColumn' => 37,
            'endColumn' => 41,
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
 * Handle dynamic calls into macros or pass missing methods to the base response.
 *
 * @param  string  $method
 * @param  array  $args
 * @return mixed
 */',
        'startLine' => 2070,
        'endLine' => 2077,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing',
        'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
        'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
        'currentClassName' => 'Illuminate\\Testing\\TestResponse',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Illuminate\\Testing\\Concerns\\AssertsStatusCodes' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\testing\\concerns\\assertsstatuscodes::__call',
          ),
        ),
        'Illuminate\\Support\\Traits\\Conditionable' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\conditionable::__call',
          ),
        ),
        'Illuminate\\Support\\Traits\\Dumpable' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\dumpable::__call',
          ),
        ),
        'Illuminate\\Support\\Traits\\Tappable' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\tappable::__call',
          ),
        ),
        'Illuminate\\Support\\Traits\\Macroable' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\macroable::__call',
          ),
        ),
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
        'illuminate\\testing\\concerns\\assertsstatuscodes::__call' => 'Illuminate\\Testing\\Concerns\\AssertsStatusCodes::__call',
        'illuminate\\support\\traits\\conditionable::__call' => 'Illuminate\\Support\\Traits\\Conditionable::__call',
        'illuminate\\support\\traits\\dumpable::__call' => 'Illuminate\\Support\\Traits\\Dumpable::__call',
        'illuminate\\support\\traits\\tappable::__call' => 'Illuminate\\Support\\Traits\\Tappable::__call',
        'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
      ),
    ),
  ),
));