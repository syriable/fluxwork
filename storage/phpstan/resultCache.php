<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1780426589,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.2.1',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80419,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, paths: [/Users/ghiath/Desktop/sites/fluxwork/app, /Users/ghiath/Desktop/sites/fluxwork/bootstrap, /Users/ghiath/Desktop/sites/fluxwork/config, /Users/ghiath/Desktop/sites/fluxwork/database, /Users/ghiath/Desktop/sites/fluxwork/modules, /Users/ghiath/Desktop/sites/fluxwork/routes, /Users/ghiath/Desktop/sites/fluxwork/tests], level: 8, tmpDir: /Users/ghiath/Desktop/sites/fluxwork/storage/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ContractsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\FacadesMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ManagersMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\AuthsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentCollectionMapDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}, {class: Pest\\PHPStan\\HigherOrderExpectationTypeExtension, tags: [phpstan.broker.expressionTypeResolverExtension]}}}',
  'analysedPaths' => 
  array (
    0 => '/Users/ghiath/Desktop/sites/fluxwork/app',
    1 => '/Users/ghiath/Desktop/sites/fluxwork/bootstrap',
    2 => '/Users/ghiath/Desktop/sites/fluxwork/config',
    3 => '/Users/ghiath/Desktop/sites/fluxwork/database',
    4 => '/Users/ghiath/Desktop/sites/fluxwork/modules',
    5 => '/Users/ghiath/Desktop/sites/fluxwork/routes',
    6 => '/Users/ghiath/Desktop/sites/fluxwork/tests',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/Users/ghiath/Desktop/sites/fluxwork/composer.lock' => 'cc84cc8390ba457980b8745c5d2511d4bcde5d635fec3f563c3f5adfcf1b66c3',
  ),
  'composerInstalled' => 
  array (
    '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'barryvdh/laravel-debugbar' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v4.2.8',
          ),
        ),
        'bezhansalleh/filament-plugin-essentials' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'reference' => 'de3a8a07edcf1bc9fe829480ae09aa00265e7f03',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../bezhansalleh/filament-plugin-essentials',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'bezhansalleh/filament-shield' => 
        array (
          'pretty_version' => '4.2.0',
          'version' => '4.2.0.0',
          'reference' => 'a48ea9ca115c644ce40380b853142afcd65e38d1',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../bezhansalleh/filament-shield',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'blade-ui-kit/blade-heroicons' => 
        array (
          'pretty_version' => '2.7.0',
          'version' => '2.7.0.0',
          'reference' => '66fa8ba09dba12e0cdb410b8cb94f3b890eca440',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../blade-ui-kit/blade-heroicons',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'blade-ui-kit/blade-icons' => 
        array (
          'pretty_version' => '1.10.0',
          'version' => '1.10.0.0',
          'reference' => '74189a80bbaa4966aebaee54fec3a3c2ef0a5f3a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../blade-ui-kit/blade-icons',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.20.0',
          'version' => '7.20.0.0',
          'reference' => '81c80677c9ec0ed4ef16b246167f11dec81a6e3d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'chillerlan/php-qrcode' => 
        array (
          'pretty_version' => '5.0.5',
          'version' => '5.0.5.0',
          'reference' => '7b66282572fc14075c0507d74d9837dab25b38d6',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../chillerlan/php-qrcode',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'chillerlan/php-settings-container' => 
        array (
          'pretty_version' => '3.3.0',
          'version' => '3.3.0.0',
          'reference' => 'a0a487cbf5344f721eb504bf0f59bada40c381b7',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../chillerlan/php-settings-container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cknow/laravel-money' => 
        array (
          'pretty_version' => 'v8.5.0',
          'version' => '8.5.0.0',
          'reference' => 'eda76ac0b7034bdeea40616021c9bb2d9568f8b3',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../cknow/laravel-money',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'codewithdennis/filament-advanced-choice' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => '847a60489816dbe46526f9d7c605ff71a37e601c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../codewithdennis/filament-advanced-choice',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'codewithdennis/filament-advanced-components' => 
        array (
          'pretty_version' => '4.0.3',
          'version' => '4.0.3.0',
          'reference' => 'c72a9f8e55d6534087c80d850c4f84ba80a94604',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../codewithdennis/filament-advanced-components',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/ca-bundle' => 
        array (
          'pretty_version' => '1.5.12',
          'version' => '1.5.12.0',
          'reference' => '00a2f4201641d5c53f7fc0195e6c8d9fcc321a78',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/./ca-bundle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/class-map-generator' => 
        array (
          'pretty_version' => '1.7.3',
          'version' => '1.7.3.0',
          'reference' => '86d8208fc3c649a3a999daf1a63c25201be2990f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/./class-map-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/composer' => 
        array (
          'pretty_version' => '2.10.0',
          'version' => '2.10.0.0',
          'reference' => 'c13824d95608b15913a7c0def0a3dea4474b71fc',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/./composer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/metadata-minifier' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'c549d23829536f0d0e984aaabbf02af91f443207',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/./metadata-minifier',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => 'b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/spdx-licenses' => 
        array (
          'pretty_version' => '1.6.0',
          'version' => '1.6.0.0',
          'reference' => '5ecd0cb4177696f9fd48f1605dda81db3dee7889',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/./spdx-licenses',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.5',
          'version' => '3.0.5.0',
          'reference' => '6c1925561632e83d60a44492e0b344cf48ab85ef',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'danharrin/date-format-converter' => 
        array (
          'pretty_version' => 'v0.3.1',
          'version' => '0.3.1.0',
          'reference' => '7c31171bc981e48726729a5f3a05a2d2b63f0b1e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../danharrin/date-format-converter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'danharrin/livewire-rate-limiting' => 
        array (
          'pretty_version' => 'v2.2.0',
          'version' => '2.2.0.0',
          'reference' => 'c03e649220089f6e5a52d422e24e3f98c73e456d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../danharrin/livewire-rate-limiting',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'facade/ignition-contracts' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../facade/ignition-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filament/actions' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => 'eb0f973dd88864c3ea7be5e999bf420ccbd62e14',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/actions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/blueprint' => 
        array (
          'pretty_version' => 'v2.1.2',
          'version' => '2.1.2.0',
          'reference' => NULL,
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/blueprint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filament/filament' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => 'fdb789aaa29ff418e0609927a683b099df2d5f55',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/filament',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/forms' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => 'e4dc9e2add4b563822d1014e35c8e16bf812aa8d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/forms',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/infolists' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => '37a2484d6c65b5908e6549302001161530a88c2c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/infolists',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/notifications' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => 'd4d1bef688dd85086229fcad6f1a157d47f6c336',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/notifications',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/query-builder' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => 'fb4b6cdebe6ab2c233cc78d3688a64f022263c56',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/query-builder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/schemas' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => '1b23f15af79252591fd72f17ad4bc536cc32d47b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/schemas',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/spatie-laravel-media-library-plugin' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => '085dda340dd99dd350d9f8fd77015cd420d8b2d2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/spatie-laravel-media-library-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/spatie-laravel-settings-plugin' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => '533f5486b6c264d130a3de4c2d928586394aee73',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/spatie-laravel-settings-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/spatie-laravel-tags-plugin' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => 'd9751f1ff695e5b54e8bee2bbb6264d06048a52d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/spatie-laravel-tags-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/support' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => '2d79214157790e89b35a00911a5d7fc5da647b87',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/support',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/tables' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => 'b67ef735bb000cf9e11bf9f71450e9faef2c5052',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/tables',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/widgets' => 
        array (
          'pretty_version' => 'v5.6.6',
          'version' => '5.6.6.0',
          'reference' => 'fdec7f94e32b1c43199221363382e47b8a6a9816',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filament/widgets',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/laravel-debugbar' => 
        array (
          'pretty_version' => 'v4.2.8',
          'version' => '4.2.8.0',
          'reference' => '799d70c1101d3f8840dd76ff68ff6a78f9352905',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../fruitcake/laravel-debugbar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.11.0',
          'version' => '7.11.0.0',
          'reference' => 'c987f8ce84b8434fa430795eca0f3430663da72b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.5.0',
          'version' => '2.5.0.0',
          'reference' => '4360e982f87f5f258bf872d094647791db2f4c8e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.11.0',
          'version' => '2.11.0.0',
          'reference' => 'bbb5e61349fa5cb822b3e87842b951088b76b81f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.6',
          'version' => '1.0.6.0',
          'reference' => 'eef7f87bab6f204eba3c39224d8075c70c637946',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.12.0',
          ),
        ),
        'internachi/modular' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '939a341079c9cc79ff916663cb93f846da1c6456',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../internachi/modular',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'internachi/modular-livewire' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => 'ed25230dab2886caa43a45e29a935be62e432f16',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../internachi/modular-livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'internachi/modularize' => 
        array (
          'pretty_version' => '1.1.1',
          'version' => '1.1.1.0',
          'reference' => '09965fcea17de5f5f84e6e1aae45f0973753be1a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../internachi/modularize',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'justinrainbow/json-schema' => 
        array (
          'pretty_version' => '6.8.2',
          'version' => '6.8.2.0',
          'reference' => '2c89ebb95ca9cedc9347f780333f7b25792dcb76',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../justinrainbow/json-schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kirschbaum-development/eloquent-power-joins' => 
        array (
          'pretty_version' => '4.3.2',
          'version' => '4.3.2.0',
          'reference' => '33c189bd51a510c1ceba67222395ead08a29863a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../kirschbaum-development/eloquent-power-joins',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.10.0',
          'version' => '3.10.0.0',
          'reference' => '2970f83398154178a739609c244577267c7ee8eb',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/agent-detector' => 
        array (
          'pretty_version' => 'v2.0.2',
          'version' => '2.0.2.0',
          'reference' => '90694b9256099591cf9e55d08c18ba7a00bf099f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/agent-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/boost' => 
        array (
          'pretty_version' => 'v2.4.8',
          'version' => '2.4.8.0',
          'reference' => 'd11d720cf9537f8d236a11d973e99563a598ec9c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/boost',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v13.12.0',
          'version' => '13.12.0.0',
          'reference' => '6ac27a7fcfa728250c9f77921cb8fb955546b591',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/mcp' => 
        array (
          'pretty_version' => 'v0.7.0',
          'version' => '0.7.0.0',
          'reference' => '3513b4feca5f1678be4d2261dcfa8e456436d02a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/mcp',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.7',
          'version' => '1.2.7.0',
          'reference' => '2f7d27dada8effc48b8c424445a69cca7007daaa',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pao' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => '519eecdefb9d5da362876376b52207c8f11b477c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/pao',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.29.1',
          'version' => '1.29.1.0',
          'reference' => '0770e9b7fafd50d4586881d456d6eb41c9247a80',
          'type' => 'project',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.18',
          'version' => '0.3.18.0',
          'reference' => 'a19af51bb144bf87f08397921fa619f85c7d4e72',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/roster' => 
        array (
          'pretty_version' => 'v0.5.1',
          'version' => '0.5.1.0',
          'reference' => '5089de7615f72f78e831590ff9d0435fed0102bb',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/roster',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.13',
          'version' => '2.0.13.0',
          'reference' => 'b566ee0dd251f3c4078bed003a7ce015f5ea6dce',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '4faba77764bd33411735936acdf30446d058c78b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.2',
          'version' => '2.8.2.0',
          'reference' => '59fb075d2101740c337c7216e3f32b36c204218b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/csv' => 
        array (
          'pretty_version' => '9.28.0',
          'version' => '9.28.0.0',
          'reference' => '6582ace29ae09ba5b07049d40ea13eb19c8b5073',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../league/csv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.34.0',
          'version' => '3.34.0.0',
          'reference' => '2daaac3b0d4c83ea7ed5d8586e786f5d00f3540e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '08cf38e3924d4f56238125547b5720496fac8fd4',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-components' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '848ff9db2f0be06229d6034b7c2e33d41b4fd675',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../league/uri-components',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '85d5c77c5d6d3af6c54db4a78246364908f3c928',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/blaze' => 
        array (
          'pretty_version' => 'v1.0.12',
          'version' => '1.0.12.0',
          'reference' => '6f7d21aac44e542261590c744aa959129c9a04ed',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../livewire/blaze',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/flux' => 
        array (
          'pretty_version' => 'v2.14.1',
          'version' => '2.14.1.0',
          'reference' => '44f240efd186b5629d5e4c4a4cc7bbba0111fb48',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../livewire/flux',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/flux-pro' => 
        array (
          'pretty_version' => '2.14.1',
          'version' => '2.14.1.0',
          'reference' => '61404a28ab2271b5381a784c9c6727a4a38124de',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../livewire/flux-pro',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v4.3.1',
          'version' => '4.3.1.0',
          'reference' => '6a9dd03f45a4b200abfd0ff644745b23fa7baaaa',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../livewire/livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maennchen/zipstream-php' => 
        array (
          'pretty_version' => '3.2.2',
          'version' => '3.2.2.0',
          'reference' => '77bebeb4c6c340bb3c11c843b2cffd8bbfde4d5e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../maennchen/zipstream-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'marc-mabe/php-enum' => 
        array (
          'pretty_version' => 'v4.7.2',
          'version' => '4.7.2.0',
          'reference' => 'bb426fcdd65c60fb3638ef741e8782508fda7eef',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../marc-mabe/php-enum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maximebf/debugbar' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v3.7.6',
          ),
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'modules/users' => 
        array (
          'pretty_version' => '1.0',
          'version' => '1.0.0.0',
          'reference' => 'ace03ab19fc421710a194234a44820efeaf92a6e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../modules/users',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'moneyphp/money' => 
        array (
          'pretty_version' => 'v4.9.0',
          'version' => '4.9.0.0',
          'reference' => 'd49ee625c6ba79b9d7a228ce153b02fc1032152b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../moneyphp/money',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.4',
          'version' => '3.11.4.0',
          'reference' => 'e890471a3494740f7d9326d72ce6a8c559ffee60',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/php-generator' => 
        array (
          'pretty_version' => 'v4.2.2',
          'version' => '4.2.2.0',
          'reference' => '0d7060926f5c3e8c488b9b9ced42d857f12a34b5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../nette/php-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.4',
          'version' => '4.1.4.0',
          'reference' => '7da6c396d7ebe142bc857c20479d5e70a5e1aac7',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.4',
          'version' => '8.9.4.0',
          'reference' => '716af8f95a470e9094cfca09ed897b023be191a5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'openspout/openspout' => 
        array (
          'pretty_version' => 'v4.32.0',
          'version' => '4.32.0.0',
          'reference' => '41f045c1f632e1474e15d4c7bc3abcb4a153563d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../openspout/openspout',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'orchestra/canvas' => 
        array (
          'pretty_version' => 'v11.0.1',
          'version' => '11.0.1.0',
          'reference' => 'd240410f4cd89b380d7d89b5bbaf60c32f4fb691',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../orchestra/canvas',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/canvas-core' => 
        array (
          'pretty_version' => 'v11.0.0',
          'version' => '11.0.0.0',
          'reference' => '88d091ff989748e2ca447bca0cd06ab14671ba82',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../orchestra/canvas-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/sidekick' => 
        array (
          'pretty_version' => 'v1.2.20',
          'version' => '1.2.20.0',
          'reference' => '267a71b56cb2fe1a634d69fc99889c671b77ff43',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../orchestra/sidekick',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench' => 
        array (
          'pretty_version' => 'v11.1.0',
          'version' => '11.1.0.0',
          'reference' => '997f33e5200c7e8db4756b35a9deb3f5f3086759',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../orchestra/testbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench-core' => 
        array (
          'pretty_version' => 'v11.3.4',
          'version' => '11.3.4.0',
          'reference' => '527fe9941b8bdec2914d2a19048b0c40c6c5d87c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../orchestra/testbench-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/workbench' => 
        array (
          'pretty_version' => 'v11.1.0',
          'version' => '11.1.0.0',
          'reference' => 'e750c7bcae4405e054ff286475502e23274de04b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../orchestra/workbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'paragonie/constant_time_encoding' => 
        array (
          'pretty_version' => 'v3.1.3',
          'version' => '3.1.3.0',
          'reference' => 'd5b01a39b3415c2cd581d3bd3a3575c1ebbd8e77',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../paragonie/constant_time_encoding',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v4.7.2',
          'version' => '4.7.2.0',
          'reference' => '40b88b62ef8a7c6fcae5fc28f1fa747f601c131b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
          'type' => 'composer-plugin',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v4.0.2',
          'version' => '4.0.2.0',
          'reference' => '3fb0d02a91b9da504b139dc7ab2a31efb7c3215c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v4.1.0',
          'version' => '4.1.0.0',
          'reference' => '3057a36669ff11416cc0dc2b521b3aec58c488d0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-livewire' => 
        array (
          'pretty_version' => 'v4.1.0',
          'version' => '4.1.0.0',
          'reference' => '0b5a137ec6ceadd19dd2c59b9b60039d64f6b4d2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../pestphp/pest-plugin-livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-profanity' => 
        array (
          'pretty_version' => 'v4.2.1',
          'version' => '4.2.1.0',
          'reference' => '343cfa6f3564b7e35df0ebb77b7fa97039f72b27',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../pestphp/pest-plugin-profanity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-debugbar/php-debugbar' => 
        array (
          'pretty_version' => 'v3.7.6',
          'version' => '3.7.6.0',
          'reference' => '1690ee1728827f9deb4b60457fa387cf44672c56',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../php-debugbar/php-debugbar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-debugbar/symfony-bridge' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => 'e37d2debe5d316408b00d0ab2688d9c2cf59b5ad',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../php-debugbar/symfony-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => '7bae67520aa9f5ecc506d646810bd40d9da54582',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '327a05bbee54120d4786a0dc67aad30226ad4cf9',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.2',
          'version' => '2.3.2.0',
          'reference' => 'a004701b11273a26cd7955a61d67a7f1e525a45a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.2.1',
          'version' => '2.2.1.0',
          'reference' => 'dea9c8f2d25cc849391042b71e429c1a4bf82660',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.5.7',
          'version' => '12.5.7.0',
          'reference' => '186dab580576598076de6818596d12b61801880e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '3d1cd096ef6bea4bf2762ba586e35dbd317cbfd5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.5.28',
          'version' => '12.5.28.0',
          'reference' => '5895d05f5bf421ed230fbd76e1277e4b8955def4',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pragmarx/google2fa' => 
        array (
          'pretty_version' => 'v9.0.0',
          'version' => '9.0.0.0',
          'reference' => 'e6bc62dd6ae83acc475f57912e27466019a1f2cf',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../pragmarx/google2fa',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pragmarx/google2fa-qrcode' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '16159f84fa0838c276f35d46de57fd90dfbb385c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../pragmarx/google2fa-qrcode',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1 || 2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
            1 => '1.0|2.0|3.0',
            2 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.23',
          'version' => '0.12.23.0',
          'reference' => '4dcc0f08047d52bbde475eda481146fd8e27e1a4',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/promise' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '23444f53a813a3296c1368bb104793ce8d88f04a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../react/promise',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rector/rector' => 
        array (
          'pretty_version' => '2.4.5',
          'version' => '2.4.5.0',
          'reference' => 'cbd86024be5014d3c14d9f0b3f7aae8ecbffd62c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../rector/rector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'ryangjchandler/blade-capture-directive' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'reference' => '3f9e80b56ff60b78755ef320e3e16d88850101d6',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../ryangjchandler/blade-capture-directive',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'scrivo/highlight.php' => 
        array (
          'pretty_version' => 'v9.18.1.10',
          'version' => '9.18.1.10',
          'reference' => '850f4b44697a2552e892ffe71490ba2733c2fc6e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../scrivo/highlight.php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.1',
          'version' => '4.2.1.0',
          'reference' => '7d05781b13f7dec9043a629a21d086ed74582a15',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '7.1.8',
          'version' => '7.1.8.0',
          'reference' => '7c65c1e79836812819705b473a90c12399542485',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.1.2',
          'version' => '8.1.2.0',
          'reference' => '9d32c685773823b1983e256ae4ecd48a10d6e439',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '7.0.3',
          'version' => '7.0.3.0',
          'reference' => 'c5e21b5de653ce0a769fb36f5cdfcb5e7a32cf23',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.3',
          'version' => '8.0.3.0',
          'reference' => 'b164d3274d6537ab462591c5755f76a8f5b1aae9',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd543b8ef219dcd8da262cbb958639a96bedba10e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '6.0.4',
          'version' => '6.0.4.0',
          'reference' => '82ff822c2edc46724be9f7411d3163021f602773',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'seld/jsonlint' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '1748aaf847fc731cfad7725aec413ee46f0cc3a2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../seld/jsonlint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'seld/phar-utils' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'reference' => 'ea2f4014f163c1be4c601b9b7bd6af81ba8d701c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../seld/phar-utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'seld/signal-handler' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => '04a6112e883ad76c0ada8e4a9f7520bbfdb6bb98',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../seld/signal-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/eloquent-sortable' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'caf2596e5df0260d0e2863e89b750611eef2fc59',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/eloquent-sortable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/guidelines-skills' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => '0fb11f5cd3607db70a7c7503b8f437c8adeeeba5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/guidelines-skills',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/image' => 
        array (
          'pretty_version' => '3.9.4',
          'version' => '3.9.4.0',
          'reference' => '6a322b5e9268e3903d4fb6e1ff08b7dcc3aa9429',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/image',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/image-optimizer' => 
        array (
          'pretty_version' => '1.8.1',
          'version' => '1.8.1.0',
          'reference' => '2ad9ac7c19501739183359ae64ea6c15869c23d9',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/image-optimizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/invade' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'b920f6411d21df4e8610a138e2e87ae4957d7f63',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/invade',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-collection-macros' => 
        array (
          'pretty_version' => '8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'ba743041d78291fb3012f8f8afe5db44843b3a19',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-collection-macros',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-data' => 
        array (
          'pretty_version' => '4.23.0',
          'version' => '4.23.0.0',
          'reference' => '230543769c996e407fec2873930626aed7dd0d3b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-livewire-wizard' => 
        array (
          'pretty_version' => '3.1.2',
          'version' => '3.1.2.0',
          'reference' => 'e30ff796bb2ec10f25afd3693bf9ca6d0330e6fb',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-livewire-wizard',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-medialibrary' => 
        array (
          'pretty_version' => '11.23.0',
          'version' => '11.23.0.0',
          'reference' => '98409dd203ad74a06b4ef5a7139ededc13bcf835',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-medialibrary',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-model-states' => 
        array (
          'pretty_version' => '2.14.1',
          'version' => '2.14.1.0',
          'reference' => '772703a62478f578c1476aa2e6dcdc25339542df',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-model-states',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.93.1',
          'version' => '1.93.1.0',
          'reference' => 'd5552849801f2642aea710557463234b59ef65eb',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-permission' => 
        array (
          'pretty_version' => '7.4.2',
          'version' => '7.4.2.0',
          'reference' => '15a9daf02ba02d3ae77aaa6da582708231ef999b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-permission',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-settings' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '6c1351cf57c4ae96cd2313ae395c6d367dfeee01',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-settings',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-sluggable' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'reference' => '82a69be1ef661ce2ff38242b271457ef0b9611dd',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-sluggable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-tags' => 
        array (
          'pretty_version' => '4.11.0',
          'version' => '4.11.0.0',
          'reference' => '7d89470d49da7ee8acd8d23b236643329c168376',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-tags',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-translatable' => 
        array (
          'pretty_version' => '6.14.1',
          'version' => '6.14.1.0',
          'reference' => 'd120a925cf413b2427f886264bb6eb102ac23d42',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/laravel-translatable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'spatie/php-attribute-reader' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '46e7484d7b51f5b22d672745c541e48c5a385404',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/php-attribute-reader',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/php-structure-discoverer' => 
        array (
          'pretty_version' => '2.4.2',
          'version' => '2.4.2.0',
          'reference' => '10cd4e0018450d23e2bd8f8472569ad0c445c0fc',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/php-structure-discoverer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/shiki-php' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'b8b0ca32d3a82bc5c533e68ffab96c5d4ec1b9ba',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/shiki-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/temporary-directory' => 
        array (
          'pretty_version' => '2.3.1',
          'version' => '2.3.1.0',
          'reference' => '662e481d6ec07ef29fd05010433428851a42cd07',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../spatie/temporary-directory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'stripe/stripe-php' => 
        array (
          'pretty_version' => 'v20.2.0',
          'version' => '20.2.0.0',
          'reference' => '38b784dd45b447609032c151c40712d9b3feecb0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../stripe/stripe-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '701ef4de9705d6c32292ebee5e8044094a09fbf6',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'f5a856c6ecb56b3c21ed94a5b7bf940d857d110a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'dc0e2be45c9b5588c82414f02ac574b4b986abcd',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => '50f59d1f3ca46d41ac911f97a78626b6756af35b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'd8aeb1abd3fef84795567850d3a567bdb5945ee5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'f249ae3f680958b6f1f9dd76e5747cf0695b4102',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => 'ccba7060602b7fed0b03c85bf025257f76d9ef32',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '99aec13b82b4967ec5088222c4a3ecca955949c2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '58d2e767a66052c1487356f953445634a8194c64',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/html-sanitizer' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'adf86ad7e51344c0b121c9f8a26c95ea35b2b8fc',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/html-sanitizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'af11474600f06718086c2cda4fa6fa8d0a672e7e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'cefeb37c82eed3e0c42fa25ba64cd3a908d90f39',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '9418d772df3a03a142e3bc06f602adb2b8724877',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'b164ae7e3f7915aacfe9ee155f2f358502440664',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '141046a8f9477948ff284fa65be2095baafb94f2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'e9247d281d694a5120554d9afaf54e070e88a603',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'dc21118016c039a66235cf93d96b435ffb282412',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => '2d446c214bdbe5b71bde5011b060a05fece3ae6b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => '14c5439eec4ccff081ac14eca2dc57feb2a66d92',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php73' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '0f68c03565dcaaf25a890667542e8bd75fe7e5bb',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-php73',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'dfb55726c3a76ea3b6459fcfda1ec2d80a682411',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => '6bfb9c766cacffbc8e118cb87217d08ed84e5cd7',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => '8339098cae28673c15cce00d80734af0453054e2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'f4e1dfaee5b74aba5964fe1fd4dfc7ba5e3085fa',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'ba2ba04f3352cfa2dcbbcb90aee13ed967f505b1',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php86' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => 'fcec68d64f46dc84e1f6ffcf2c6dda40ff3143ad',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-php86',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '26dfec253c4cf3e51b541b52ddf7e42cb0908e94',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'c4a9e58f235a6bf7f97ffbfedae2687353ac79e5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'fe0bfec72c8a806109fb9c3a5f2b898fe0c76eb3',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => 'd25d82433a80eba6aa0e6c24b61d7370d99e444a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'afd5944f4005862d961efb85c8bbd5c523c4e3c9',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'b2bd012ca28c4acae830ee1206a5b6e35dd99693',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => '0ab302977a952b42fd51475c4ebac81f8da0a95d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '7393f157a55f7e70a4de0334435c55a5a8fe749a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'c2c4df1d21477cc21c9f6dc1b14d07c3abc4963e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'efb42bd2c6f4f3ccfd4683583449938b5fc146b0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.7',
          'version' => '0.8.7.0',
          'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ueberdosis/tiptap-php' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6ea321fa665080e1a72ac5f52dfab19f6a292e2d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../ueberdosis/tiptap-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '8e1051fe39379367aecf014f41744ce7539a856f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => '9007ea6f45ecf352a9422b36644e4bfc039b9155',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'wire-elements/modal' => 
        array (
          'pretty_version' => '3.0.4',
          'version' => '3.0.4.0',
          'reference' => '3c17ed4e5d1506773db37dbbfdcacff12b037317',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/fluxwork/vendor/composer/../wire-elements/modal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/Users/ghiath/Desktop/sites/fluxwork/vendor/larastan/larastan/bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar:///Users/ghiath/Desktop/sites/fluxwork/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar:///Users/ghiath/Desktop/sites/fluxwork/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar:///Users/ghiath/Desktop/sites/fluxwork/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar:///Users/ghiath/Desktop/sites/fluxwork/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dba',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'gmp',
    23 => 'hash',
    24 => 'herd',
    25 => 'iconv',
    26 => 'igbinary',
    27 => 'imagick',
    28 => 'imap',
    29 => 'intl',
    30 => 'json',
    31 => 'ldap',
    32 => 'libxml',
    33 => 'mbstring',
    34 => 'mongodb',
    35 => 'mysqli',
    36 => 'mysqlnd',
    37 => 'openssl',
    38 => 'pcntl',
    39 => 'pcre',
    40 => 'pdo_mysql',
    41 => 'pdo_pgsql',
    42 => 'pdo_sqlite',
    43 => 'pdo_sqlsrv',
    44 => 'pgsql',
    45 => 'posix',
    46 => 'random',
    47 => 'readline',
    48 => 'redis',
    49 => 'session',
    50 => 'shmop',
    51 => 'soap',
    52 => 'sockets',
    53 => 'sodium',
    54 => 'sqlite3',
    55 => 'sqlsrv',
    56 => 'standard',
    57 => 'sysvmsg',
    58 => 'sysvsem',
    59 => 'sysvshm',
    60 => 'tokenizer',
    61 => 'xml',
    62 => 'xmlreader',
    63 => 'xmlwriter',
    64 => 'xsl',
    65 => 'zip',
    66 => 'zlib',
    67 => 'zstd',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method App\\Providers\\AppServiceProvider::extraAttributes().',
       'file' => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
       'line' => 126,
       'canBeIgnored' => true,
       'filePath' => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 126,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method App\\Providers\\AppServiceProvider::evaluate().',
       'file' => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
       'line' => 130,
       'canBeIgnored' => true,
       'filePath' => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 130,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method App\\Providers\\AppServiceProvider::extraAttributes().',
       'file' => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
       'line' => 135,
       'canBeIgnored' => true,
       'filePath' => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 135,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'linesToIgnore' => array (
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php' => 
  array (
    '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php' => 
    array (
      126 => NULL,
      130 => NULL,
      135 => NULL,
    ),
  ),
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Actions/LoginAction.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => 
    array (
      0 => 
      array (
        0 => 'filament-panels::auth/pages/login.messages.failed',
        1 => 34,
      ),
      1 => 
      array (
        0 => 'filament-panels::auth/pages/login.notifications.throttled.title',
        1 => 87,
      ),
      2 => 
      array (
        0 => 'filament-panels::auth/pages/login.notifications.throttled',
        1 => 98,
      ),
      3 => 
      array (
        0 => 'filament-panels::auth/pages/login.notifications.throttled.body',
        1 => 104,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Livewire\\Auth\\Actions\\LoginAction',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 49,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'hit',
        2 => 31,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Data/LoginData.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Livewire\\Auth\\Data\\LoginData',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Login.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Livewire\\Auth\\Login',
        1 => 'getTitle',
        2 => 'App\\Livewire\\Auth\\Login',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Models/User.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Spatie\\Permission\\Traits\\HasRoles',
      ),
      1 => 
      array (
        0 => 'Spatie\\ModelStates\\HasStates',
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
      ),
      3 => 
      array (
        0 => 'Spatie\\MediaLibrary\\InteractsWithMedia',
      ),
      4 => 
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'BladeUI\\Icons\\Factory',
        ),
        1 => 'add',
        2 => 149,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Session',
        1 => 'extend',
        2 => 55,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Date',
        1 => 'use',
        2 => 78,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Validation\\Rules\\Password',
        1 => 'defaults',
        2 => 105,
      ),
      3 => 
      array (
        0 => 'Filament\\Support\\Components\\Component',
        1 => 'configureUsing',
        2 => 111,
      ),
      4 => 
      array (
        0 => 'Filament\\Support\\Components\\Component',
        1 => 'configureUsing',
        2 => 112,
      ),
      5 => 
      array (
        0 => 'Filament\\Support\\Components\\Component',
        1 => 'configureUsing',
        2 => 113,
      ),
      6 => 
      array (
        0 => 'Filament\\Support\\Components\\Component',
        1 => 'configureUsing',
        2 => 114,
      ),
      7 => 
      array (
        0 => 'Filament\\Support\\Components\\Component',
        1 => 'configureUsing',
        2 => 115,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/Filament/DashboardPanelProvider.php' => 
  array (
    'PHPStan\\Rules\\Methods\\NamedArgumentParameterMethodCallsCollector' => 
    array (
      0 => 
      array (
        0 => 'Filament\\Panel',
        1 => 'discoverResources',
        2 => 'in',
        3 => 40,
      ),
      1 => 
      array (
        0 => 'Filament\\Panel',
        1 => 'discoverResources',
        2 => 'for',
        3 => 40,
      ),
      2 => 
      array (
        0 => 'Filament\\Panel',
        1 => 'discoverPages',
        2 => 'in',
        3 => 41,
      ),
      3 => 
      array (
        0 => 'Filament\\Panel',
        1 => 'discoverPages',
        2 => 'for',
        3 => 41,
      ),
      4 => 
      array (
        0 => 'Filament\\Panel',
        1 => 'discoverWidgets',
        2 => 'in',
        3 => 45,
      ),
      5 => 
      array (
        0 => 'Filament\\Panel',
        1 => 'discoverWidgets',
        2 => 'for',
        3 => 45,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Rules/NotEffectivelyBlank.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => 
    array (
      0 => 
      array (
        0 => 'validation.visible_characters',
        1 => 39,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Rules/Timezone.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => 
    array (
      0 => 
      array (
        0 => 'validation.timezone',
        1 => 19,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Session/PolymorphicDatabaseSessionHandler.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Session\\DatabaseSessionHandler',
        1 => '__construct',
        2 => 23,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Livewire/Component.php' => 
  array (
    'PHPStan\\Rules\\Methods\\NamedArgumentParameterMethodCallsCollector' => 
    array (
      0 => 
      array (
        0 => 'Livewire\\Component',
        1 => 'dispatch',
        2 => 'params',
        3 => 63,
      ),
      1 => 
      array (
        0 => 'Livewire\\Component',
        1 => 'dispatch',
        2 => 'params',
        3 => 63,
      ),
      2 => 
      array (
        0 => 'Livewire\\Component',
        1 => 'dispatch',
        2 => 'params',
        3 => 63,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/CastMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ChannelMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ComponentMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ConsoleMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ControllerMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/EventMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ExceptionMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/FactoryMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
      1 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasFactoryGenerator',
        2 => '\\Orchestra\\Sidekick\\Filesystem\\join_paths(base_path(\'vendor/orchestra/canvas/src/Console\'), $stub):18',
        3 => NULL,
      ),
      2 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasFactoryGenerator',
        2 => 'base_path(\'vendor/orchestra/canvas/src/Console\'):18',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasFactoryGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\ResolvesPresetStubs',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/JobMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ListenerMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MailMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MiddlewareMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MigrateMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CreatesUsingGeneratorPreset',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ModelMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/NotificationMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
      ),
      3 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      4 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      5 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ObserverMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/PolicyMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ProviderMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RequestMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ResourceMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RuleMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/SeederMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/TestMakeCommand.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        2 => '$this->addGeneratorPresetOptions():11',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
      ),
      1 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
      2 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
      ),
      3 => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/ConfiguresCanvasPresets.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 7,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/UsesCanvasFactoryGenerator.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasFactoryGenerator',
        1 => 11,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/UsesCanvasTestGenerator.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
        1 => 9,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/UsesStandardCanvasGenerator.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
        1 => 10,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Time.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'asort',
        1 => 167,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/app.php' => 
  array (
    'PHPStan\\Rules\\Methods\\NamedArgumentParameterMethodCallsCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Configuration\\ApplicationBuilder',
        1 => 'withRouting',
        2 => 'web',
        3 => 12,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Foundation\\Configuration\\ApplicationBuilder',
        1 => 'withRouting',
        2 => 'commands',
        3 => 13,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Foundation\\Configuration\\ApplicationBuilder',
        1 => 'withRouting',
        2 => 'health',
        3 => 14,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/migrations/2026_06_01_114550_create_permission_tables.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'throw_if',
        1 => 20,
      ),
      1 => 
      array (
        0 => 'throw_if',
        1 => 21,
      ),
      2 => 
      array (
        0 => 'throw_if',
        1 => 129,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/seeders/DatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Admin.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Users\\Models\\Admin',
        1 => 'casts',
        2 => 'Modules\\Users\\Models\\Admin',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Buyer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Users\\Models\\Buyer',
        1 => 'casts',
        2 => 'Modules\\Users\\Models\\Buyer',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/ActiveToSuspended.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Users\\States\\Account\\Transitions\\ActiveToSuspended',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/SuspendedToActive.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Users\\States\\Account\\Transitions\\SuspendedToActive',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/routes/web.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'welcome',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 9,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/ExampleTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 7,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/PolymorphicDatabaseSessionTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'uses',
        1 => 11,
      ),
      1 => 
      array (
        0 => 'beforeEach',
        1 => 13,
      ),
      2 => 
      array (
        0 => 'config',
        1 => 14,
      ),
      3 => 
      array (
        0 => 'test',
        1 => 17,
      ),
      4 => 
      array (
        0 => 'Pest\\Laravel\\actingAs',
        1 => 20,
      ),
      5 => 
      array (
        0 => 'Pest\\Laravel\\get',
        1 => 22,
      ),
      6 => 
      array (
        0 => 'test',
        1 => 31,
      ),
      7 => 
      array (
        0 => 'Pest\\Laravel\\actingAs',
        1 => 34,
      ),
      8 => 
      array (
        0 => 'Pest\\Laravel\\get',
        1 => 36,
      ),
      9 => 
      array (
        0 => 'test',
        1 => 45,
      ),
      10 => 
      array (
        0 => 'Pest\\Laravel\\get',
        1 => 46,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeTrue',
        2 => 24,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeTrue',
        2 => 38,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeFalse',
        2 => 48,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeFalse',
        2 => 49,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/Pest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\PendingCalls\\UsesCall',
        ),
        1 => 'in',
        2 => 19,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/Unit/ExampleTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 5,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeTrue',
        2 => 6,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/Users/ghiath/Desktop/sites/fluxwork/app/Console/Commands/FileGenerators/Resources/Pages/ResourceCreateRecordPageClassGenerator.php' => 
  array (
    'fileHash' => 'd33ad27582de39682c97452046f585df5ba710573cca1950c08f02e4d0e7311c',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Console/Commands/FileGenerators/Resources/Pages/ResourceEditRecordPageClassGenerator.php' => 
  array (
    'fileHash' => 'e00b7dcbaf59bfd2bcbc9f371c636816dee46bab76313c1c9ce2111b04b0f108',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Console/Commands/FileGenerators/Resources/Pages/ResourceListRecordsPageClassGenerator.php' => 
  array (
    'fileHash' => 'cea461b902985a1a5f8ab7f33a17430cb0117dee0fdd1ad6dd46da0c7d031bdd',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Console/Commands/FileGenerators/Resources/ResourceClassGenerator.php' => 
  array (
    'fileHash' => 'c43b155f884caec6238bd43ea71535b41fff47d5f47dd85edbed3db5673b7c24',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Enums/Alignment.php' => 
  array (
    'fileHash' => '4b509e9223dd98ad6dbd127fe228cf0d6ed294313b97a292bbf8f3abb3e655be',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Enums/Position.php' => 
  array (
    'fileHash' => '41daef42e54f1a60703dae97be559c784c94148f631f1419449e14c5f47c2223',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Filament/Schemas/Components/Separator.php' => 
  array (
    'fileHash' => 'd9f1a660ff1bed3e64919f43b76aafc82000d6816bbf2a8c94300d5432113728',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Login.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => '09e5cac5a69959ccf23d756cda697b993df937c106655d124ff27ca5fe24a705',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Actions/LoginAction.php' => 
  array (
    'fileHash' => '2f2c3aca440c0ac41fa2f8eb433b51a173329a3f0a82022402f81f16031722c8',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Login.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Data/LoginData.php' => 
  array (
    'fileHash' => '6c734a7707a97855171a4617e2433dbfcf8dcc14c53144c1d07b507e2bc4c89f',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Actions/LoginAction.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Login.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Login.php' => 
  array (
    'fileHash' => '8b4ab31c29205146b5be0a0751cf20f678ec460eee77dca123f94c19020370ed',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/routes/auth.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Models/User.php' => 
  array (
    'fileHash' => 'fa2a38bc4264c931526dde347f51e17860e0d309cedc4007547c221f24a04d74',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Session/PolymorphicDatabaseSessionHandler.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Time.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/config/auth.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/config/filament-shield.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/AdminFactory.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/BuyerFactory.php',
      6 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/AdminSeeder.php',
      7 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/BuyerSeeder.php',
      8 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Admin.php',
      9 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Buyer.php',
      10 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/ActiveToSuspended.php',
      11 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/SuspendedToActive.php',
      12 => '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/PolymorphicDatabaseSessionTest.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '179778f671cfd741347e7973940e16e9f89f610b24ba8d60505cdc2bfcf234b2',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/cache/services.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/providers.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/Filament/DashboardPanelProvider.php' => 
  array (
    'fileHash' => '8f7b157cf4fc9792d6005ea33bc30417ec72a096a23ba914977c9774bba215fe',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/cache/services.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/providers.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php' => 
  array (
    'fileHash' => '45729fc8573500d2d4301d755959be3e743e0e140cf917ae0f8f928fb15136fa',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/cache/services.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/providers.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Rules/NotEffectivelyBlank.php' => 
  array (
    'fileHash' => 'f3f79b9e55b2142db08544b3939487ac10f492800e02cebb84fe925445ff36da',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Rules/Timezone.php' => 
  array (
    'fileHash' => '3509cae3355f31a9a9a033ed64e412fb0724d04eca4c3523ac4aa2115fb44509',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Session/PolymorphicDatabaseSessionHandler.php' => 
  array (
    'fileHash' => 'f032b423e20a99d5be656b8a1fd9516e7112c777cec5eadb60fe3f4e7f327e92',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Actions/GenerateSlugAction.php' => 
  array (
    'fileHash' => '79bf9f9d3ac1d8c68b7521c48ef434412636792d5b60b9122c397f3d10f74caa',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Livewire/Component.php' => 
  array (
    'fileHash' => '4cb5cb0f38ac9b39f37135ea50291c77ef7b6d973225114bcf6b412bb0c43ad3',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Login.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Livewire/Page.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/routes/auth.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Livewire/Contracts/Modal.php' => 
  array (
    'fileHash' => '00485f9c4ebd080d69ccba0adcdb764476b048d3e31b0661a4eb1cd6de7a85da',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Livewire/Page.php' => 
  array (
    'fileHash' => 'bb53fed1f4840394cbbdf12396ecdeb4d5056e7917abfe5fa0607dcc53d80a7b',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Login.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/routes/auth.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/CastMakeCommand.php' => 
  array (
    'fileHash' => '3c75dcc94b23b57ebd09b345207341eca14780d14a8500f98900b248f97826b4',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ChannelMakeCommand.php' => 
  array (
    'fileHash' => 'ffc124712bdd4d23190bbcefcae100f69660a9c9c27495cdf9d20561224c8530',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ComponentMakeCommand.php' => 
  array (
    'fileHash' => 'ba9606f52190aef7a2c70e3e54d878b3f256ae3170920a0f490dc216e4dbb6ad',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ConsoleMakeCommand.php' => 
  array (
    'fileHash' => '88b21df4685fa9e4cbcb1095d1cc64f383ec5998edbe4f7c894b0e427762ba14',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ControllerMakeCommand.php' => 
  array (
    'fileHash' => 'c4206d8c3da2663f04a70a41188473b4147403f5d86a51b8117b82aee5ed5622',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/EventMakeCommand.php' => 
  array (
    'fileHash' => '383293bc1dd2ef99bd20408a5abb02d585da131da1d041692b2b113486f7e1e0',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ExceptionMakeCommand.php' => 
  array (
    'fileHash' => 'fc915b2b8a598edadb143d701e952dc6bf496255da38e220cb456a8543c12ad2',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/FactoryMakeCommand.php' => 
  array (
    'fileHash' => '2eddec80242d613039353eca1140a61a74dfab3c1aee7621ae9a63d1e161f43f',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/JobMakeCommand.php' => 
  array (
    'fileHash' => 'c2d4bbf34b6bee300469bff2c346673e0f54f8caa55674fd1eb4d21db0914c3d',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ListenerMakeCommand.php' => 
  array (
    'fileHash' => '0261fee429e241ca30aa147c5e5618a93c33c7e7238ec554c545a7be05f36f08',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MailMakeCommand.php' => 
  array (
    'fileHash' => '565b79d094a0b3923478533a193cf0cf297ed51155acd1db07553d0baf8eb4bf',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MiddlewareMakeCommand.php' => 
  array (
    'fileHash' => '6dee4d5b09752783eef7c853d1552f047b16735840505ae8e62cbabb0f52a0d8',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MigrateMakeCommand.php' => 
  array (
    'fileHash' => 'c1e0615a3c898172a644f9e0643accb49318168cd42816486d714be250e81888',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ModelMakeCommand.php' => 
  array (
    'fileHash' => 'd3f84eb82348b8a6ce996d206fef65912b6dfbdc6a0bec868f91fad13c83174a',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/NotificationMakeCommand.php' => 
  array (
    'fileHash' => '029388984affb5e9a6942b1b47e175df79a632d5b02ae5c299e0cde2376dcf4d',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ObserverMakeCommand.php' => 
  array (
    'fileHash' => '75b3424a230a7fe7e4c766d5c5e271417f4dfb03034fa2062672629ad74dd295',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/PolicyMakeCommand.php' => 
  array (
    'fileHash' => 'db7d348cb10bbbc7881e17a3f3ecc6b720a756c06e483b9c24bd8ff8fe26f5bf',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ProviderMakeCommand.php' => 
  array (
    'fileHash' => 'a1b36eeee703735888cf95d9bf75a97a9de30948842b5ae530b3f1c2f7bb7d8d',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RequestMakeCommand.php' => 
  array (
    'fileHash' => 'f00869dce61863de99f616558f899f189b89e89720203e032212b7c93e5198cc',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ResourceMakeCommand.php' => 
  array (
    'fileHash' => '30e404c324e21ae9cc59529abf17b4efb7ea9ae82869b226405f8bb3eb3c4d92',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RuleMakeCommand.php' => 
  array (
    'fileHash' => 'fefbd3919277cffba9f95676005884bdc82893516a839d308bcb911600e6ca3a',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/SeederMakeCommand.php' => 
  array (
    'fileHash' => '65f1031a739fa4505b1dd88fbd5cc93f0327ae9c91b0511912009a1968def940',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/TestMakeCommand.php' => 
  array (
    'fileHash' => '825748038adb471ba8239f556099f922dea3abb6e1851d9ebb4d34f75f3a48c2',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/ConfiguresCanvasPresets.php' => 
  array (
    'fileHash' => '6911a4e159c349eb4562e85a4eee2904c02547cdd3f7e92cf9a126ef9b23a61d',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/CastMakeCommand.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ChannelMakeCommand.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ComponentMakeCommand.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ConsoleMakeCommand.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ControllerMakeCommand.php',
      6 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/EventMakeCommand.php',
      7 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ExceptionMakeCommand.php',
      8 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/FactoryMakeCommand.php',
      9 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/JobMakeCommand.php',
      10 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ListenerMakeCommand.php',
      11 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MailMakeCommand.php',
      12 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MiddlewareMakeCommand.php',
      13 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MigrateMakeCommand.php',
      14 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ModelMakeCommand.php',
      15 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/NotificationMakeCommand.php',
      16 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ObserverMakeCommand.php',
      17 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/PolicyMakeCommand.php',
      18 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ProviderMakeCommand.php',
      19 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RequestMakeCommand.php',
      20 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ResourceMakeCommand.php',
      21 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RuleMakeCommand.php',
      22 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/SeederMakeCommand.php',
      23 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/TestMakeCommand.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/CastMakeCommand.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ChannelMakeCommand.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ComponentMakeCommand.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ConsoleMakeCommand.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ControllerMakeCommand.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/EventMakeCommand.php',
      6 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ExceptionMakeCommand.php',
      7 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/FactoryMakeCommand.php',
      8 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/JobMakeCommand.php',
      9 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ListenerMakeCommand.php',
      10 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MailMakeCommand.php',
      11 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MiddlewareMakeCommand.php',
      12 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MigrateMakeCommand.php',
      13 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ModelMakeCommand.php',
      14 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/NotificationMakeCommand.php',
      15 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ObserverMakeCommand.php',
      16 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/PolicyMakeCommand.php',
      17 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ProviderMakeCommand.php',
      18 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RequestMakeCommand.php',
      19 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ResourceMakeCommand.php',
      20 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RuleMakeCommand.php',
      21 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/SeederMakeCommand.php',
      22 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/TestMakeCommand.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/UsesCanvasFactoryGenerator.php' => 
  array (
    'fileHash' => '2e6fef2a1c0a32963a4984aa160fda1bdea325e6ccf9e49e5f5c291e82294361',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/FactoryMakeCommand.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/FactoryMakeCommand.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/UsesCanvasTestGenerator.php' => 
  array (
    'fileHash' => '0d0fb70dd747390edd96fecead7476e2940bc540515bb39e7f0c00da96e760c8',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ChannelMakeCommand.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ComponentMakeCommand.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ConsoleMakeCommand.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ControllerMakeCommand.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/JobMakeCommand.php',
      6 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ListenerMakeCommand.php',
      7 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MailMakeCommand.php',
      8 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MiddlewareMakeCommand.php',
      9 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ModelMakeCommand.php',
      10 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/NotificationMakeCommand.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ChannelMakeCommand.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ComponentMakeCommand.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ConsoleMakeCommand.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ControllerMakeCommand.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/JobMakeCommand.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ListenerMakeCommand.php',
      6 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MailMakeCommand.php',
      7 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MiddlewareMakeCommand.php',
      8 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ModelMakeCommand.php',
      9 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/NotificationMakeCommand.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/UsesStandardCanvasGenerator.php' => 
  array (
    'fileHash' => '507233bac7eb4703aebf61138322453581f8e82fcfa5545e2a45a8ed8c554aa1',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/CastMakeCommand.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ChannelMakeCommand.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ComponentMakeCommand.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ConsoleMakeCommand.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ControllerMakeCommand.php',
      6 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/EventMakeCommand.php',
      7 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ExceptionMakeCommand.php',
      8 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/FactoryMakeCommand.php',
      9 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/JobMakeCommand.php',
      10 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ListenerMakeCommand.php',
      11 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MailMakeCommand.php',
      12 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MiddlewareMakeCommand.php',
      13 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ModelMakeCommand.php',
      14 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/NotificationMakeCommand.php',
      15 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ObserverMakeCommand.php',
      16 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/PolicyMakeCommand.php',
      17 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ProviderMakeCommand.php',
      18 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RequestMakeCommand.php',
      19 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ResourceMakeCommand.php',
      20 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RuleMakeCommand.php',
      21 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/SeederMakeCommand.php',
      22 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/TestMakeCommand.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/CastMakeCommand.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ChannelMakeCommand.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ComponentMakeCommand.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ConsoleMakeCommand.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ControllerMakeCommand.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/EventMakeCommand.php',
      6 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ExceptionMakeCommand.php',
      7 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/FactoryMakeCommand.php',
      8 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/JobMakeCommand.php',
      9 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ListenerMakeCommand.php',
      10 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MailMakeCommand.php',
      11 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MiddlewareMakeCommand.php',
      12 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ModelMakeCommand.php',
      13 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/NotificationMakeCommand.php',
      14 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ObserverMakeCommand.php',
      15 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/PolicyMakeCommand.php',
      16 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ProviderMakeCommand.php',
      17 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RequestMakeCommand.php',
      18 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ResourceMakeCommand.php',
      19 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RuleMakeCommand.php',
      20 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/SeederMakeCommand.php',
      21 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/TestMakeCommand.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Time.php' => 
  array (
    'fileHash' => '63beebd5539da99045d4da43f1e08ec76c1ef5281b74f177b18a247797ac931c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/UnicodeSlug.php' => 
  array (
    'fileHash' => 'ea4dbb01cc1a0ffd35eb6351246cf9a66b079c42a221bab3a94cf031542399e5',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Actions/GenerateSlugAction.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/app.php' => 
  array (
    'fileHash' => '98762fe1904fbf7bcaa34452609b16936be42dd15243d603b22a01c7facb1b42',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/cache/packages.php' => 
  array (
    'fileHash' => '4204536db3de980ad535f5b954df7efcd4fd80168300acfad9312fb43df1005f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/cache/services.php' => 
  array (
    'fileHash' => '25241a6d0675e4e08642aba6d27d0de17c6769abc2283443e769ae3f1125269a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/providers.php' => 
  array (
    'fileHash' => '7006b6e73c4da3de5bec2c49ae1414c813151c89e838cee5b23291e8008a826a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/app-modules.php' => 
  array (
    'fileHash' => '4c5235a219d5f6dee57f8024b89033e3e5d6eac342099ca8b6b187143fbad723',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/app.php' => 
  array (
    'fileHash' => '37141f0faf0acb48816dbb2b0ed4d227db1aaefdd5f610d462ff3ce3d96b7500',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/auth.php' => 
  array (
    'fileHash' => '843b14318a7dafb940f7fe4db7ce6ec700208991e6c8c5e67165898262f03aef',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/cache.php' => 
  array (
    'fileHash' => 'c3d513579bba5963c2bd4e48c36dd96340ba62a42cc35357a4b47f737ee21c62',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/database.php' => 
  array (
    'fileHash' => '7b111f04d86b501ff87f2e0612ea51a1459167f236dcbc155fcf3a72349a26d9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/filament-shield.php' => 
  array (
    'fileHash' => '74b5b0bffc81c428d764308be666cfdf152a80a8fac64e897eeadd518b703ca4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/filesystems.php' => 
  array (
    'fileHash' => '66830455986c6546b03fcc35ffb584bb38c941ec4c72e12175e6dc3322ac41ba',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/logging.php' => 
  array (
    'fileHash' => '726a82dbc708ec8e0bd171f384b193e87084b565c2483c2294c7eceb68304288',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/mail.php' => 
  array (
    'fileHash' => '9e13b4fef803c10ce9b2fb6c72e3d35d6048dda1dc3d9080844adb66678fbb79',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/media-library.php' => 
  array (
    'fileHash' => '76cff7181dcbc93c5800e93a57472c6581d84006ffed4bb8787738cb38d4df8c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/permission.php' => 
  array (
    'fileHash' => '1ca83a100a0581726304c7b09af0122da73955cf1fc9863ea67e22920df8171c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/queue.php' => 
  array (
    'fileHash' => '726a1f09999779c025cba796df9e0d174955f752f7256e4b1cb699519a89e916',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/services.php' => 
  array (
    'fileHash' => '37c1281883d2876439decac5933fb5aa8e2106bc57c0d65679bf03e87c15dccb',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/session.php' => 
  array (
    'fileHash' => '4c927c57036186c4ebac15ba850f99f3e02817c515c75c13c74c542c32035851',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/settings.php' => 
  array (
    'fileHash' => '99c9b67618c8f9fe495f486193d11eb9d0cd9ea2a4aa70595a43dca07ed9808e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/sluggable.php' => 
  array (
    'fileHash' => '628e276c46bdf6cf1ef262e4788fceb48001f97d2cd9b9e1bd3a15213493158b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/config/tags.php' => 
  array (
    'fileHash' => '6c1c1fc139c8b57fa6f96da38ce16dbfeca976241e64f4229a66741b0b74da10',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/migrations/0001_01_01_000000_create_sessions_table.php' => 
  array (
    'fileHash' => 'e48360ee218cecf0f03c6fb7f13285c4a5b8c0aaa7d6dafa7c6457a08dc38a15',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/migrations/0001_01_01_000001_create_cache_table.php' => 
  array (
    'fileHash' => 'fbb4665e5a977e71df4e74ec75b3c06ca4f17ad0de7138fe9786639189978e77',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/migrations/0001_01_01_000002_create_jobs_table.php' => 
  array (
    'fileHash' => 'df4910687180313a14a3f96a8bddd808ae145ed1b107cd772caf865c0dc2b746',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/migrations/2022_12_14_083707_create_settings_table.php' => 
  array (
    'fileHash' => 'a2e2fe93b4736745134b71c9a22ad4b5725e215d2650e271653fb01c6fdbed39',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/migrations/2026_06_01_114538_create_media_table.php' => 
  array (
    'fileHash' => '234b0bf1a07fe5cf04a80e7191b7940f412c722796044e33fd2269949a2d7129',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/migrations/2026_06_01_114550_create_permission_tables.php' => 
  array (
    'fileHash' => '7793376ade0f8d148d0438a72cea110c8189a5c7913e219fe223eb0593d02fce',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/migrations/2026_06_01_114609_create_tag_tables.php' => 
  array (
    'fileHash' => '82c7e2832b9a18e9c38235a074fb2829b3494fa6bcf2f6a8c3c223b084821be7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/seeders/DatabaseSeeder.php' => 
  array (
    'fileHash' => 'a844524ddb1c1ee2cfc5d52c901d4bdd473d4f64386213e983c29da4697c2d96',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/AdminFactory.php' => 
  array (
    'fileHash' => 'bb463657413451a49a7fcd62f2baa5ff4829c3a36967bcdf0cbffdbe02d22c13',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/AdminSeeder.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Admin.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/PolymorphicDatabaseSessionTest.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/BuyerFactory.php' => 
  array (
    'fileHash' => 'd7eb2984a3c403a46d4f5f81df05bdc410b0fa93c2ded896865acd31185daf01',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/BuyerSeeder.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Buyer.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/PolymorphicDatabaseSessionTest.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/migrations/2026_06_01_124126_create_buyers_table.php' => 
  array (
    'fileHash' => '666eaf28222d82e15e935de2706098064a55ca0a62762a940796f5b3da4e9f65',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/migrations/2026_06_01_124157_create_admins_table.php' => 
  array (
    'fileHash' => '6fa6b709313acedbd041b1ab14553e7d485ecc72d6ecdb553343e9463b375702',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/AdminSeeder.php' => 
  array (
    'fileHash' => 'a91c96d1190b31133767e258e7f52ed5930c151217db4a3f30a157f05462a913',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/BuyerSeeder.php' => 
  array (
    'fileHash' => '5a86255feb3e33b6e598890fbdd12067a13d1bcddc55efc8e613d7a1e0340246',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/routes/users-routes.php' => 
  array (
    'fileHash' => '0f47689a54b62f2fa99240ff0e081920bad20dc3779b24d76f16e7709eecbed3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Admin.php' => 
  array (
    'fileHash' => '02790b1562f99a6f945ac20c414d1c6efd27e8ae589625830edcf7e43e8cc1d3',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Session/PolymorphicDatabaseSessionHandler.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Time.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/config/auth.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/AdminFactory.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/AdminSeeder.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/PolymorphicDatabaseSessionTest.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Buyer.php' => 
  array (
    'fileHash' => '2d0a5f1b913aac6feaaad80e3afa82318823daddbeb1a018d26366841d76a16f',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Session/PolymorphicDatabaseSessionHandler.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Time.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/config/auth.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/AdminFactory.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/BuyerFactory.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/migrations/2026_06_01_124126_create_buyers_table.php',
      6 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/migrations/2026_06_01_124157_create_admins_table.php',
      7 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/BuyerSeeder.php',
      8 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Admin.php',
      9 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Active.php',
      10 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Suspended.php',
      11 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/ActiveToSuspended.php',
      12 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/SuspendedToActive.php',
      13 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/AccountState.php',
      14 => '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/PolymorphicDatabaseSessionTest.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Providers/UsersServiceProvider.php' => 
  array (
    'fileHash' => 'a49e17dd1971b0c9d57f527a9de748b21620af783acfc72cf04870fa3288e44b',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/cache/packages.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/bootstrap/cache/services.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Active.php' => 
  array (
    'fileHash' => 'e7d228f9ea4a2005573812f762ba6c6f614aa482adedcf646cc3f0d390acf187',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/AdminFactory.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/BuyerFactory.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/migrations/2026_06_01_124126_create_buyers_table.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/migrations/2026_06_01_124157_create_admins_table.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/SuspendedToActive.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/AccountState.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Suspended.php' => 
  array (
    'fileHash' => '92cf2cc2a4943d27390cd9006230a8771d0623e7016c9941115b21483112b2c9',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/ActiveToSuspended.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/AccountState.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/ActiveToSuspended.php' => 
  array (
    'fileHash' => '468fc77bc52a9c52e1daed0d452022e35c751ec3d490e8caf66a3d1c1aff985a',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/AccountState.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/SuspendedToActive.php' => 
  array (
    'fileHash' => 'eaf51fb675ad3714cefd040640c68ecf5236c3efc2742e4bc91d97f90a6fd02b',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/AccountState.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/AccountState.php' => 
  array (
    'fileHash' => '14fec4c20f209d7a0cb544d83575f42ba20e3762c0d298768baa2ff05293f7e7',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/app/Session/PolymorphicDatabaseSessionHandler.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Time.php',
      2 => '/Users/ghiath/Desktop/sites/fluxwork/config/auth.php',
      3 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/AdminFactory.php',
      4 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/BuyerFactory.php',
      5 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/migrations/2026_06_01_124126_create_buyers_table.php',
      6 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/migrations/2026_06_01_124157_create_admins_table.php',
      7 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/BuyerSeeder.php',
      8 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Admin.php',
      9 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Buyer.php',
      10 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Active.php',
      11 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Suspended.php',
      12 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/ActiveToSuspended.php',
      13 => '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/SuspendedToActive.php',
      14 => '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/PolymorphicDatabaseSessionTest.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/routes/auth.php' => 
  array (
    'fileHash' => '2862ec7fe13297da1600ca73bf21674a9d7faba4448adcaa21e3cd297fe19673',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/routes/console.php' => 
  array (
    'fileHash' => '9adccc33e7dd400683e434774077c7fdb2f299c5712cedf16a43fdf56f2850fa',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/routes/web.php' => 
  array (
    'fileHash' => 'd897225e07fdb5bd039672306a767f78172eee3264fddad33e9980a2f459fa62',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/ExampleTest.php' => 
  array (
    'fileHash' => '20afa58882dd61769a0e7eb32c40dc8595b8e62c49dac921c350eb6b32db2a3b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/Feature/PolymorphicDatabaseSessionTest.php' => 
  array (
    'fileHash' => 'f9a1fd5a7bea21b5098872c44834d028d8a5a65f48e0990ddde43e36827a70c0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/Pest.php' => 
  array (
    'fileHash' => '2cc124d922d4339205d3d9aa0fdef1676eabd06f8de7963a4eda745af69517ec',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/TestCase.php' => 
  array (
    'fileHash' => '1cdd2af8e86d6edbfad0d36d61b9708d208831a30b18b4d02e566fc1bbcb19df',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/fluxwork/config/app-modules.php',
      1 => '/Users/ghiath/Desktop/sites/fluxwork/tests/Pest.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/Unit/ExampleTest.php' => 
  array (
    'fileHash' => '3080b41680e626195a05bb709f3f1b5ceb6e89dbd9fead4bdb3d521646ba977d',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/ghiath/Desktop/sites/fluxwork/app/Console/Commands/FileGenerators/Resources/Pages/ResourceCreateRecordPageClassGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\FileGenerators\\Resources\\Pages\\ResourceCreateRecordPageClassGenerator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Commands\\FileGenerators\\Resources\\Pages\\ResourceCreateRecordPageClassGenerator',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Console/Commands/FileGenerators/Resources/Pages/ResourceEditRecordPageClassGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\FileGenerators\\Resources\\Pages\\ResourceEditRecordPageClassGenerator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Commands\\FileGenerators\\Resources\\Pages\\ResourceEditRecordPageClassGenerator',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Console/Commands/FileGenerators/Resources/Pages/ResourceListRecordsPageClassGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\FileGenerators\\Resources\\Pages\\ResourceListRecordsPageClassGenerator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Commands\\FileGenerators\\Resources\\Pages\\ResourceListRecordsPageClassGenerator',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Console/Commands/FileGenerators/Resources/ResourceClassGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\FileGenerators\\Resources\\ResourceClassGenerator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Commands\\FileGenerators\\Resources\\ResourceClassGenerator',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Enums/Alignment.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\Alignment',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Start',
           'value' => '\'start\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'End',
           'value' => '\'end\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Enums/Position.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\Position',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Bottom',
           'value' => '\'bottom\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Top',
           'value' => '\'top\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Inside',
           'value' => '\'inside\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Filament/Schemas/Components/Separator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filament\\Schemas\\Components\\Separator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Schemas\\Components\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'view',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'orientation',
          ),
           'phpDoc' => NULL,
           'type' => 'Closure|null|string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'vertical',
          ),
           'phpDoc' => NULL,
           'type' => 'Closure|bool|null',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'variant',
          ),
           'phpDoc' => NULL,
           'type' => 'Closure|null|string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'faint',
          ),
           'phpDoc' => NULL,
           'type' => 'Closure|bool|null',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'text',
          ),
           'phpDoc' => NULL,
           'type' => 'Closure|null|string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'orientation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'orientation',
               'type' => 'Closure|string|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'vertical',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'vertical',
               'type' => 'Closure|bool|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'variant',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'variant',
               'type' => 'Closure|string|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'faint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'faint',
               'type' => 'Closure|bool|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'text',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'text',
               'type' => 'Closure|string|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getOrientation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getVertical',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getVariant',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFaint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getText',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'make',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Actions/LoginAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Auth\\Actions\\LoginAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'loginData',
               'type' => 'App\\Livewire\\Auth\\Data\\LoginData',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Data/LoginData.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Auth\\Data\\LoginData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Spatie\\LaravelData\\Data',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'email',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
                0 => 
                \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
                   'name' => 'Spatie\\LaravelData\\Attributes\\Validation\\Email',
                   'args' => 
                  array (
                  ),
                )),
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'password',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'remember',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Livewire/Auth/Login.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Auth\\Login',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property-read Schema $form
 */',
         'namespace' => 'App\\Livewire\\Auth',
         'uses' => 
        array (
          'separator' => 'App\\Filament\\Schemas\\Components\\Separator',
          'loginaction' => 'App\\Livewire\\Auth\\Actions\\LoginAction',
          'logindata' => 'App\\Livewire\\Auth\\Data\\LoginData',
          'page' => 'App\\Support\\Livewire\\Page',
          'action' => 'Filament\\Actions\\Action',
          'checkbox' => 'Filament\\Forms\\Components\\Checkbox',
          'textinput' => 'Filament\\Forms\\Components\\TextInput',
          'actions' => 'Filament\\Schemas\\Components\\Actions',
          'component' => 'Filament\\Schemas\\Components\\Component',
          'embeddedschema' => 'Filament\\Schemas\\Components\\EmbeddedSchema',
          'flex' => 'Filament\\Schemas\\Components\\Flex',
          'form' => 'Filament\\Schemas\\Components\\Form',
          'section' => 'Filament\\Schemas\\Components\\Section',
          'schema' => 'Filament\\Schemas\\Schema',
          'color' => 'Filament\\Support\\Colors\\Color',
          'alignment' => 'Filament\\Support\\Enums\\Alignment',
          'width' => 'Filament\\Support\\Enums\\Width',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Support\\Livewire\\Page',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'view',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'maxContentWidth',
          ),
           'phpDoc' => NULL,
           'type' => 'Filament\\Support\\Enums\\Width|string|null',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'data',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, mixed> */',
             'namespace' => 'App\\Livewire\\Auth',
             'uses' => 
            array (
              'separator' => 'App\\Filament\\Schemas\\Components\\Separator',
              'loginaction' => 'App\\Livewire\\Auth\\Actions\\LoginAction',
              'logindata' => 'App\\Livewire\\Auth\\Data\\LoginData',
              'page' => 'App\\Support\\Livewire\\Page',
              'action' => 'Filament\\Actions\\Action',
              'checkbox' => 'Filament\\Forms\\Components\\Checkbox',
              'textinput' => 'Filament\\Forms\\Components\\TextInput',
              'actions' => 'Filament\\Schemas\\Components\\Actions',
              'component' => 'Filament\\Schemas\\Components\\Component',
              'embeddedschema' => 'Filament\\Schemas\\Components\\EmbeddedSchema',
              'flex' => 'Filament\\Schemas\\Components\\Flex',
              'form' => 'Filament\\Schemas\\Components\\Form',
              'section' => 'Filament\\Schemas\\Components\\Section',
              'schema' => 'Filament\\Schemas\\Schema',
              'color' => 'Filament\\Support\\Colors\\Color',
              'alignment' => 'Filament\\Support\\Enums\\Alignment',
              'width' => 'Filament\\Support\\Enums\\Width',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTitle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'form',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Schemas\\Schema',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schema',
               'type' => 'Filament\\Schemas\\Schema',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'content',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Schemas\\Schema',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schema',
               'type' => 'Filament\\Schemas\\Schema',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFormContentComponent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Schemas\\Components\\Component',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authenticate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'loginAction',
               'type' => 'App\\Livewire\\Auth\\Actions\\LoginAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
        0 => 'Spatie\\MediaLibrary\\HasMedia',
      ),
       'usedTraits' => 
      array (
        0 => 'Spatie\\Permission\\Traits\\HasRoles',
        1 => 'Spatie\\ModelStates\\HasStates',
        2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUlids',
        3 => 'Spatie\\MediaLibrary\\InteractsWithMedia',
        4 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerMediaCollections',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'polymorphicdatabasesessionhandler' => 'App\\Session\\PolymorphicDatabaseSessionHandler',
              'factory' => 'BladeUI\\Icons\\Factory',
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'advancedtextcolumn' => 'CodeWithDennis\\FilamentAdvancedComponents\\Filament\\Tables\\Components\\AdvancedTextColumn',
              'action' => 'Filament\\Actions\\Action',
              'resourcecreaterecordpageclassgenerator' => 'Filament\\Commands\\FileGenerators\\Resources\\Pages\\ResourceCreateRecordPageClassGenerator',
              'resourceeditrecordpageclassgenerator' => 'Filament\\Commands\\FileGenerators\\Resources\\Pages\\ResourceEditRecordPageClassGenerator',
              'resourcelistrecordspageclassgenerator' => 'Filament\\Commands\\FileGenerators\\Resources\\Pages\\ResourceListRecordsPageClassGenerator',
              'resourceclassgenerator' => 'Filament\\Commands\\FileGenerators\\Resources\\ResourceClassGenerator',
              'textarea' => 'Filament\\Forms\\Components\\Textarea',
              'textinput' => 'Filament\\Forms\\Components\\TextInput',
              'togglebuttons' => 'Filament\\Forms\\Components\\ToggleButtons',
              'page' => 'Filament\\Pages\\Page',
              'section' => 'Filament\\Schemas\\Components\\Section',
              'schema' => 'Filament\\Schemas\\Schema',
              'alignment' => 'Filament\\Support\\Enums\\Alignment',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'app' => 'Illuminate\\Support\\Facades\\App',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'session' => 'Illuminate\\Support\\Facades\\Session',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
              'blaze' => 'Livewire\\Blaze\\Blaze',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'polymorphicdatabasesessionhandler' => 'App\\Session\\PolymorphicDatabaseSessionHandler',
              'factory' => 'BladeUI\\Icons\\Factory',
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'advancedtextcolumn' => 'CodeWithDennis\\FilamentAdvancedComponents\\Filament\\Tables\\Components\\AdvancedTextColumn',
              'action' => 'Filament\\Actions\\Action',
              'resourcecreaterecordpageclassgenerator' => 'Filament\\Commands\\FileGenerators\\Resources\\Pages\\ResourceCreateRecordPageClassGenerator',
              'resourceeditrecordpageclassgenerator' => 'Filament\\Commands\\FileGenerators\\Resources\\Pages\\ResourceEditRecordPageClassGenerator',
              'resourcelistrecordspageclassgenerator' => 'Filament\\Commands\\FileGenerators\\Resources\\Pages\\ResourceListRecordsPageClassGenerator',
              'resourceclassgenerator' => 'Filament\\Commands\\FileGenerators\\Resources\\ResourceClassGenerator',
              'textarea' => 'Filament\\Forms\\Components\\Textarea',
              'textinput' => 'Filament\\Forms\\Components\\TextInput',
              'togglebuttons' => 'Filament\\Forms\\Components\\ToggleButtons',
              'page' => 'Filament\\Pages\\Page',
              'section' => 'Filament\\Schemas\\Components\\Section',
              'schema' => 'Filament\\Schemas\\Schema',
              'alignment' => 'Filament\\Support\\Enums\\Alignment',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'app' => 'Illuminate\\Support\\Facades\\App',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'session' => 'Illuminate\\Support\\Facades\\Session',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
              'blaze' => 'Livewire\\Blaze\\Blaze',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'initializeFilamentComponents',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'microFilamentComponents',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/Filament/DashboardPanelProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\Filament\\DashboardPanelProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\PanelProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'panel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Panel',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Filament\\Panel',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Providers/ModularCanvasServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\ModularCanvasServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'canvasCommandBindings',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<class-string, class-string>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'castmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\CastMakeCommand',
              'channelmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ChannelMakeCommand',
              'componentmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ComponentMakeCommand',
              'consolemakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ConsoleMakeCommand',
              'controllermakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ControllerMakeCommand',
              'eventmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\EventMakeCommand',
              'exceptionmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ExceptionMakeCommand',
              'factorymakecommand' => 'App\\Support\\ModularCanvas\\Commands\\FactoryMakeCommand',
              'jobmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\JobMakeCommand',
              'listenermakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ListenerMakeCommand',
              'mailmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\MailMakeCommand',
              'middlewaremakecommand' => 'App\\Support\\ModularCanvas\\Commands\\MiddlewareMakeCommand',
              'migratemakecommand' => 'App\\Support\\ModularCanvas\\Commands\\MigrateMakeCommand',
              'modelmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ModelMakeCommand',
              'notificationmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\NotificationMakeCommand',
              'observermakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ObserverMakeCommand',
              'policymakecommand' => 'App\\Support\\ModularCanvas\\Commands\\PolicyMakeCommand',
              'providermakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ProviderMakeCommand',
              'requestmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\RequestMakeCommand',
              'resourcemakecommand' => 'App\\Support\\ModularCanvas\\Commands\\ResourceMakeCommand',
              'rulemakecommand' => 'App\\Support\\ModularCanvas\\Commands\\RuleMakeCommand',
              'seedermakecommand' => 'App\\Support\\ModularCanvas\\Commands\\SeederMakeCommand',
              'testmakecommand' => 'App\\Support\\ModularCanvas\\Commands\\TestMakeCommand',
              'application' => 'Illuminate\\Console\\Application',
              'artisan' => 'Illuminate\\Console\\Application',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'canvascastmakecommand' => 'Orchestra\\Canvas\\Console\\CastMakeCommand',
              'canvaschannelmakecommand' => 'Orchestra\\Canvas\\Console\\ChannelMakeCommand',
              'canvascomponentmakecommand' => 'Orchestra\\Canvas\\Console\\ComponentMakeCommand',
              'canvasconsolemakecommand' => 'Orchestra\\Canvas\\Console\\ConsoleMakeCommand',
              'canvascontrollermakecommand' => 'Orchestra\\Canvas\\Console\\ControllerMakeCommand',
              'canvaseventmakecommand' => 'Orchestra\\Canvas\\Console\\EventMakeCommand',
              'canvasexceptionmakecommand' => 'Orchestra\\Canvas\\Console\\ExceptionMakeCommand',
              'canvasfactorymakecommand' => 'Orchestra\\Canvas\\Console\\FactoryMakeCommand',
              'canvasjobmakecommand' => 'Orchestra\\Canvas\\Console\\JobMakeCommand',
              'canvaslistenermakecommand' => 'Orchestra\\Canvas\\Console\\ListenerMakeCommand',
              'canvasmailmakecommand' => 'Orchestra\\Canvas\\Console\\MailMakeCommand',
              'canvasmiddlewaremakecommand' => 'Orchestra\\Canvas\\Console\\MiddlewareMakeCommand',
              'canvasmigratemakecommand' => 'Orchestra\\Canvas\\Console\\MigrateMakeCommand',
              'canvasmodelmakecommand' => 'Orchestra\\Canvas\\Console\\ModelMakeCommand',
              'canvasnotificationmakecommand' => 'Orchestra\\Canvas\\Console\\NotificationMakeCommand',
              'canvasobservermakecommand' => 'Orchestra\\Canvas\\Console\\ObserverMakeCommand',
              'canvaspolicymakecommand' => 'Orchestra\\Canvas\\Console\\PolicyMakeCommand',
              'canvasprovidermakecommand' => 'Orchestra\\Canvas\\Console\\ProviderMakeCommand',
              'canvasrequestmakecommand' => 'Orchestra\\Canvas\\Console\\RequestMakeCommand',
              'canvasresourcemakecommand' => 'Orchestra\\Canvas\\Console\\ResourceMakeCommand',
              'canvasrulemakecommand' => 'Orchestra\\Canvas\\Console\\RuleMakeCommand',
              'canvasseedermakecommand' => 'Orchestra\\Canvas\\Console\\SeederMakeCommand',
              'canvastestmakecommand' => 'Orchestra\\Canvas\\Console\\TestMakeCommand',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerCanvasCommandOverrides',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Rules/NotEffectivelyBlank.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Rules\\NotEffectivelyBlank',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Rejects values that are visually empty — i.e., contain only Unicode
 * whitespace, line/paragraph separators, or format characters (zero-width
 * joiners, bidi controls, soft hyphens, etc.).
 *
 * Use alongside `required` when you also need to guard against inputs
 * that look like content but render as nothing.
 */',
         'namespace' => 'App\\Rules',
         'uses' => 
        array (
          'closure' => 'Closure',
          'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
          'potentiallytranslatedstring' => 'Illuminate\\Translation\\PotentiallyTranslatedString',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Validation\\ValidationRule',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  Closure(string): PotentiallyTranslatedString  $fail
     */',
             'namespace' => 'App\\Rules',
             'uses' => 
            array (
              'closure' => 'Closure',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'potentiallytranslatedstring' => 'Illuminate\\Translation\\PotentiallyTranslatedString',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attribute',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'fail',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Rules/Timezone.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Rules\\Timezone',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Validation\\ValidationRule',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attribute',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'fail',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Session/PolymorphicDatabaseSessionHandler.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Session\\PolymorphicDatabaseSessionHandler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Session\\DatabaseSessionHandler',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'connection',
               'type' => 'Illuminate\\Database\\ConnectionInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'minutes',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'container',
               'type' => '?Illuminate\\Contracts\\Container\\Container',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'auth',
               'type' => '?Illuminate\\Contracts\\Auth\\Factory',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 2,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addUserInformation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array<string, mixed>  $payload
     */',
             'namespace' => 'App\\Session',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Contracts\\Auth\\Factory',
              'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
              'container' => 'Illuminate\\Contracts\\Container\\Container',
              'connectioninterface' => 'Illuminate\\Database\\ConnectionInterface',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'databasesessionhandler' => 'Illuminate\\Session\\DatabaseSessionHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'payload',
               'type' => NULL,
               'byRef' => true,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authenticatedUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?Illuminate\\Database\\Eloquent\\Model',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Actions/GenerateSlugAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Actions\\GenerateSlugAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Spatie\\Sluggable\\Actions\\GenerateSlugAction',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'slugifySource',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'source',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'Spatie\\Sluggable\\SlugOptions',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Livewire/Component.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Livewire\\Component',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\Pages\\BasePage',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'forceClose',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'skipModals',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'destroySkipped',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'maxWidths',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var array<string, string> */',
             'namespace' => 'App\\Support\\Livewire',
             'uses' => 
            array (
              'basepage' => 'Filament\\Pages\\BasePage',
              'invalidargumentexception' => 'InvalidArgumentException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroySkippedModals',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'skipPreviousModals',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'count',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'destroy',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'skipPreviousModal',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'count',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'destroy',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forceClose',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'closeModal',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'closeModalWithEvents',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array<int|string, mixed>  $events
     */',
             'namespace' => 'App\\Support\\Livewire',
             'uses' => 
            array (
              'basepage' => 'Filament\\Pages\\BasePage',
              'invalidargumentexception' => 'InvalidArgumentException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'events',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'modalMaxWidth',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'modalMaxWidthClass',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'closeModalOnClickAway',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'closeModalOnEscape',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'closeModalOnEscapeIsForceful',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dispatchCloseEvent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroyOnClose',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Livewire/Contracts/Modal.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Support\\Livewire\\Contracts\\Modal',
       'phpDoc' => NULL,
       'extends' => 
      array (
        0 => 'LivewireUI\\Modal\\Contracts\\ModalComponent',
      ),
       'statements' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Livewire/Page.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Livewire\\Page',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'App\\Support\\Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'layout',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultForm',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Schemas\\Schema',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schema',
               'type' => 'Filament\\Schemas\\Schema',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/CastMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\CastMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeCast',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ChannelMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ChannelMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeChannel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ComponentMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ComponentMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeComponent',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ConsoleMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ConsoleMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeCommand',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ControllerMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ControllerMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/EventMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\EventMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeEvent',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ExceptionMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ExceptionMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/FactoryMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\FactoryMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeFactory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasFactoryGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return int|bool|null
     */',
             'namespace' => 'App\\Support\\ModularCanvas\\Commands',
             'uses' => 
            array (
              'configurescanvaspresets' => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
              'usescanvasfactorygenerator' => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasFactoryGenerator',
              'modularmakefactory' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeFactory',
              'override' => 'Override',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/JobMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\JobMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeJob',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ListenerMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ListenerMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeListener',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MailMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\MailMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeMail',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MiddlewareMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\MiddlewareMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeMiddleware',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/MigrateMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\MigrateMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeMigration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'Orchestra\\Canvas\\Core\\Concerns\\CreatesUsingGeneratorPreset',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ModelMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ModelMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/NotificationMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\NotificationMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeNotification',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ObserverMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ObserverMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeObserver',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/PolicyMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\PolicyMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakePolicy',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ProviderMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ProviderMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RequestMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\RequestMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/ResourceMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\ResourceMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/RuleMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\RuleMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeRule',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/SeederMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\SeederMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeSeeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Commands/TestMakeCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Commands\\TestMakeCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'InterNACHI\\Modular\\Console\\Commands\\Make\\MakeTest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/ConfiguresCanvasPresets.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Concerns\\ConfiguresCanvasPresets',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureCanvasPresets',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/UsesCanvasFactoryGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasFactoryGenerator',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\ResolvesPresetStubs',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveDefaultStubPath',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'stub',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/UsesCanvasTestGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Concerns\\UsesCanvasTestGenerator',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\TestGenerator',
        1 => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/ModularCanvas/Concerns/UsesStandardCanvasGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Support\\ModularCanvas\\Concerns\\UsesStandardCanvasGenerator',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
        0 => 'Orchestra\\Canvas\\Core\\Concerns\\CodeGenerator',
        1 => 'Orchestra\\Canvas\\Core\\Concerns\\UsesGeneratorOverrides',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/Time.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Time',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Timezone-aware presentation helper.
 *
 * Per Document 01 §19 and Document 02 §19, the database stores every timestamp
 * in UTC. This helper is the single sanctioned path for converting a stored
 * UTC timestamp into a user-local presentation value. It must be called only
 * at the presentation layer (Livewire view methods, Filament column modifiers,
 * Blade helpers, notification templates, exporters) — never inside a query,
 * an Action, or a Service that mutates state.
 *
 * The IANA tzdata bundled with PHP is the source of truth. DST and historical
 * offset changes are handled by ext/date; this class never computes offsets
 * by hand.
 */',
         'namespace' => 'App\\Support',
         'uses' => 
        array (
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'datetimeinterface' => 'DateTimeInterface',
          'datetimezone' => 'DateTimeZone',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'displayFor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Convert a stored UTC timestamp into the given user\'s local time.
     *
     * Accepts any value Carbon can interpret (CarbonInterface, DateTimeInterface,
     * ISO-8601 string, unix timestamp int). Returns a CarbonImmutable so the
     * caller cannot accidentally mutate the result.
     *
     * @param  object|null  $user  anything exposing a public `timezone` string
     *                             (User, Admin, or any model that follows the
     *                             §19.3 convention). null falls back through
     *                             auth() → settings → config.
     * @param  CarbonInterface|DateTimeInterface|string|int  $when  the UTC instant
     */',
             'namespace' => 'App\\Support',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'carboninterface' => 'Carbon\\CarbonInterface',
              'datetimeinterface' => 'DateTimeInterface',
              'datetimezone' => 'DateTimeZone',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Carbon\\CarbonImmutable',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => '?object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'when',
               'type' => 'Carbon\\CarbonInterface|DateTimeInterface|string|int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nowFor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Current local time for the given user.
     *
     * Use this when the sender of a message needs to see the recipient\'s local
     * clock to decide whether the moment is appropriate (e.g. not 3 a.m. for them).
     *
     * @param  object|null  $user  anything exposing a public `timezone` string
     */',
             'namespace' => 'App\\Support',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'carboninterface' => 'Carbon\\CarbonInterface',
              'datetimeinterface' => 'DateTimeInterface',
              'datetimezone' => 'DateTimeZone',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Carbon\\CarbonImmutable',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => '?object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatFor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Format a stored UTC timestamp in the user\'s local timezone, using
     * Carbon\'s locale-aware translatedFormat (per Document 08 §3.1 rule 15).
     *
     * @param  string  $format  any format string supported by Carbon::translatedFormat
     */',
             'namespace' => 'App\\Support',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'carboninterface' => 'Carbon\\CarbonInterface',
              'datetimeinterface' => 'DateTimeInterface',
              'datetimezone' => 'DateTimeZone',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => '?object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'when',
               'type' => 'Carbon\\CarbonInterface|DateTimeInterface|string|int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'format',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveTimezone',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Resolve the IANA timezone identifier to display in for a given subject.
     *
     * Resolution order (per Document 02 §19.2):
     *   1. The passed-in user\'s `timezone` property, if it is a valid IANA id.
     *   2. The currently authenticated user (when no user was passed).
     *   3. GeneralSettings::default_timezone.
     *   4. config(\'app.timezone\').
     *   5. \'UTC\' as last resort.
     *
     * Each candidate is validated; an unknown identifier is skipped, never thrown.
     * A render path must not 500 because of a stale profile value.
     */',
             'namespace' => 'App\\Support',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'carboninterface' => 'Carbon\\CarbonInterface',
              'datetimeinterface' => 'DateTimeInterface',
              'datetimezone' => 'DateTimeZone',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => '?object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isValidIdentifier',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the given string is a valid IANA timezone identifier.
     */',
             'namespace' => 'App\\Support',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'carboninterface' => 'Carbon\\CarbonInterface',
              'datetimeinterface' => 'DateTimeInterface',
              'datetimezone' => 'DateTimeZone',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'identifier',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'selectOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Map of IANA identifier => "City (UTC±HH:MM)" with offsets computed
     * from the live tzdata at the moment of the call. Suitable for the
     * <select> on the profile locale section.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Support',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'carboninterface' => 'Carbon\\CarbonInterface',
              'datetimeinterface' => 'DateTimeInterface',
              'datetimezone' => 'DateTimeZone',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/app/Support/UnicodeSlug.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\UnicodeSlug',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'make',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'text',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'separator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/database/seeders/DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
              'adminseeder' => 'Modules\\Users\\Database\\Seeders\\AdminSeeder',
              'buyerseeder' => 'Modules\\Users\\Database\\Seeders\\BuyerSeeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/AdminFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Admin>
 */',
         'namespace' => 'Modules\\Users\\Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
          'admin' => 'Modules\\Users\\Models\\Admin',
          'active' => 'Modules\\Users\\States\\Account\\Active',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name of the factory\'s corresponding model.
     *
     * @var class-string<Admin>
     */',
             'namespace' => 'Modules\\Users\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
              'admin' => 'Modules\\Users\\Models\\Admin',
              'active' => 'Modules\\Users\\States\\Account\\Active',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The current password being used by the factory.
     */',
             'namespace' => 'Modules\\Users\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
              'admin' => 'Modules\\Users\\Models\\Admin',
              'active' => 'Modules\\Users\\States\\Account\\Active',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Modules\\Users\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
              'admin' => 'Modules\\Users\\Models\\Admin',
              'active' => 'Modules\\Users\\States\\Account\\Active',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Modules\\Users\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
              'admin' => 'Modules\\Users\\Models\\Admin',
              'active' => 'Modules\\Users\\States\\Account\\Active',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'suspended',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lastLogin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'active',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/factories/BuyerFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\Database\\Factories\\BuyerFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Buyer>
 */',
         'namespace' => 'Modules\\Users\\Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
          'buyer' => 'Modules\\Users\\Models\\Buyer',
          'active' => 'Modules\\Users\\States\\Account\\Active',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name of the factory\'s corresponding model.
     *
     * @var class-string<Buyer>
     */',
             'namespace' => 'Modules\\Users\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
              'buyer' => 'Modules\\Users\\Models\\Buyer',
              'active' => 'Modules\\Users\\States\\Account\\Active',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The current password being used by the factory.
     */',
             'namespace' => 'Modules\\Users\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
              'buyer' => 'Modules\\Users\\Models\\Buyer',
              'active' => 'Modules\\Users\\States\\Account\\Active',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Modules\\Users\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
              'buyer' => 'Modules\\Users\\Models\\Buyer',
              'active' => 'Modules\\Users\\States\\Account\\Active',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Modules\\Users\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
              'buyer' => 'Modules\\Users\\Models\\Buyer',
              'active' => 'Modules\\Users\\States\\Account\\Active',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'suspended',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lastLogin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'active',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/AdminSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\Database\\Seeders\\AdminSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Modules\\Users\\Database\\Seeders',
             'uses' => 
            array (
              'seeder' => 'Illuminate\\Database\\Seeder',
              'admin' => 'Modules\\Users\\Models\\Admin',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/database/seeders/BuyerSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\Database\\Seeders\\BuyerSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Modules\\Users\\Database\\Seeders',
             'uses' => 
            array (
              'seeder' => 'Illuminate\\Database\\Seeder',
              'buyer' => 'Modules\\Users\\Models\\Buyer',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Admin.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\Models\\Admin',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'Modules\\Users\\Models',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
              'hidden' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'adminfactory' => 'Modules\\Users\\Database\\Factories\\AdminFactory',
              'accountstate' => 'Modules\\Users\\States\\AccountState',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'username\', \'display_name\', \'email\', \'password\', \'suspended_at\', \'suspension_reason\', \'last_login_at\', \'last_login_ip\']',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
           'args' => 
          array (
            0 => '\'password\'',
            1 => '\'remember_token\'',
          ),
        )),
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Models/Buyer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\Models\\Buyer',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property AccountState $account_state
 * @property Carbon|null $suspended_at
 * @property string|null $suspension_reason
 */',
         'namespace' => 'Modules\\Users\\Models',
         'uses' => 
        array (
          'user' => 'App\\Models\\User',
          'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
          'hidden' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'carbon' => 'Illuminate\\Support\\Carbon',
          'buyerfactory' => 'Modules\\Users\\Database\\Factories\\BuyerFactory',
          'accountstate' => 'Modules\\Users\\States\\AccountState',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'Modules\\Users\\Models',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
              'hidden' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'carbon' => 'Illuminate\\Support\\Carbon',
              'buyerfactory' => 'Modules\\Users\\Database\\Factories\\BuyerFactory',
              'accountstate' => 'Modules\\Users\\States\\AccountState',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'username\', \'display_name\', \'email\', \'password\', \'suspended_at\', \'suspension_reason\', \'last_login_at\', \'last_login_ip\']',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
           'args' => 
          array (
            0 => '\'password\'',
            1 => '\'remember_token\'',
          ),
        )),
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/Providers/UsersServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\Providers\\UsersServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Active.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\States\\Account\\Active',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Modules\\Users\\States\\AccountState',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Suspended.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\States\\Account\\Suspended',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Modules\\Users\\States\\AccountState',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/ActiveToSuspended.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\States\\Account\\Transitions\\ActiveToSuspended',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Spatie\\ModelStates\\Transition',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'buyer',
               'type' => 'Modules\\Users\\Models\\Buyer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reason',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Users\\Models\\Buyer',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/Account/Transitions/SuspendedToActive.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\States\\Account\\Transitions\\SuspendedToActive',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Spatie\\ModelStates\\Transition',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'buyer',
               'type' => 'Modules\\Users\\Models\\Buyer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Users\\Models\\Buyer',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/modules/users/src/States/AccountState.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Users\\States\\AccountState',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends State<Buyer>
 */',
         'namespace' => 'Modules\\Users\\States',
         'uses' => 
        array (
          'buyer' => 'Modules\\Users\\Models\\Buyer',
          'active' => 'Modules\\Users\\States\\Account\\Active',
          'suspended' => 'Modules\\Users\\States\\Account\\Suspended',
          'activetosuspended' => 'Modules\\Users\\States\\Account\\Transitions\\ActiveToSuspended',
          'suspendedtoactive' => 'Modules\\Users\\States\\Account\\Transitions\\SuspendedToActive',
          'state' => 'Spatie\\ModelStates\\State',
          'stateconfig' => 'Spatie\\ModelStates\\StateConfig',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => 'Spatie\\ModelStates\\State',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'config',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Spatie\\ModelStates\\StateConfig',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/fluxwork/tests/TestCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\TestCase',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Testing\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
