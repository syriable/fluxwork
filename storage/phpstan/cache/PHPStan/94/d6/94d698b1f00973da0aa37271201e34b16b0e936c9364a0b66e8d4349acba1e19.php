<?php declare(strict_types = 1);

// ftm-/Users/ghiath/Desktop/sites/fluxwork/vendor/spatie/laravel-medialibrary/src/InteractsWithMedia.php
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v5-2.3.2',
   'data' => 
  array (
    0 => 
    array (
      '60663ca288b1da0f37aa81dcd4208e67' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
          'TMedia' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TMedia',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
               'default' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 2,
                'endLine' => 2,
              ),
            )),
          ),
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '8c24eae5f66050f0b7a0bf117d8f30e5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'bootInteractsWithMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'd93b32146ab20bd1d3c515ae7f7d87f9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'media',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'b3ffb3705ee9b78d014463f6f283a8c8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'd66b9de619e21161ca7c07436ab501fd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMediaFromRequest',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'e694084ecb096c6d004abc623af3d5d9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMediaFromDisk',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '99dd3d255fe0078fd3b62e7636f2e5ae' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addFromMediaLibraryRequest',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '76c2f5095ff706acf34f7d2b8965b1d5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'syncFromMediaLibraryRequest',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'c029d74f169890e5fd02020fd7bbbcbc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMultipleMediaFromRequest',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '8686a24ab502b4797ea5af9a0ce34ed4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addAllMediaFromRequest',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '00dbad8fc66a221eadae7c781648cc68' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMediaFromUrl',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '7d1bd55ba03f5a4e88d3db81ad6b5ff3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMediaFromString',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '21f93e1af0d81277b2ef04dfe61ca46b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMediaFromBase64',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'fea5fda3669dcc950b04a2ad4e3bc21e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMediaFromStream',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '28f47a02cb4a4d281f71e430e89a52b1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'copyMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'afffc102cb73efd987bb0f235715b3fc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'hasMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '5cd818010dd96bcb7bdfc2854e18c60a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '89a8ab7b0c15f7fa51ef2002d7b547e5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getMediaRepository',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '24f1a8f1bdfd42ce26b591644744f173' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getMediaModel',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '8d5d69a1899b5f4820c5f938bfd98169' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getFirstMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'c7685918f6bd557a7488c1b27671415c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getLastMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '4f3a7f05b2eab75b58ad9864d2be3d93' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getMediaItem',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '429d2605b4c43157f29b1b71ab2807e3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getMediaItemUrl',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'b8f88e588626223003f0499d816b847e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getFirstMediaUrl',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'f2d2a272b9ba7a26cbf65386c38b1328' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getLastMediaUrl',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '66911225f7638eeb2a8108b042531eb6' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getMediaItemTemporaryUrl',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'd160553dce26f36063e569972653ca9f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getFirstTemporaryUrl',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '58468a45f06662e6f6ab6689141156da' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getLastTemporaryUrl',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'bf6f86178642718d5465d3e3aff37244' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getRegisteredMediaCollections',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '83671be374415a57e9fac4fae63c07cb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getMediaCollection',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'df7d391d7f2c30ea39bd3570ec25e594' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getFallbackMediaUrl',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '73b363b75d1410fb72ae46a1ee93b557' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getFallbackMediaPath',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '4736d1e087dff834546fe6ae3490e3dd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getMediaItemPath',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '849b2b794f34e008568863d177d46f23' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getFirstMediaPath',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'dfc2da859164513e985cfe8ba5a822d8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'getLastMediaPath',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '6c5d570590d43ec42ea06ae9675ebac2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'updateMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'cf0cae996680601b6ee62b236f7b6654' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'removeMediaItemsNotPresentInArray',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '02b6711d91db1610cf0708adaf9cebea' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'clearMediaCollection',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '0188dc47b97310496aa31c1d23976be5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'clearMediaCollectionExcept',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'd786fe9b47280ed4dfbbc30d759c2992' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'deleteMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'be5fb2eff2aeb11f2b06586467c7bf6e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMediaConversion',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '5204e29b24c77504269488701205fb5a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'addMediaCollection',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'fa5c09a31f820e33cf01b39e24a1ef0d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'deletePreservingMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '0439a58a1cab7228e661b0de639134f6' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'shouldDeletePreservingMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'b44ecae247e8dcfa2ad933e639efb34d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'mediaIsPreloaded',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '68ce445660e27a726eece31968eddc87' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'loadMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'f9108498d3d1b59aa5191a41d42e7560' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'prepareToAttachMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '04d0b28b240bbe6cac543be16a544555' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'processUnattachedMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'ca54214e3c5d08d047a908dc4287d2b5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'guardAgainstInvalidMimeType',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '4dd0e10c6dd03046b9271399a190ed97' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'deleteAllMedia',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'e979dde6195d24d054f54edc1271f225' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'registerMediaConversions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'da3af2ee0f7f6f263ee4ab49345e0f53' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'registerMediaCollections',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'a934e8957adff4d1702223b38b34c61a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => 'registerAllMediaConversions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'c01564646df278d89e038ebb9206737a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\MediaLibrary',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'file' => 'Illuminate\\Http\\File',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
          'str' => 'Illuminate\\Support\\Str',
          'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
          'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
          'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
          'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
          'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
          'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
          'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
          'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
          'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
          'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
          'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
          'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
          'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
          'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
          'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
          'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
          'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
        ),
         'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
         'functionName' => '__sleep',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\MediaLibrary',
           'uses' => 
          array (
            'datetimeinterface' => 'DateTimeInterface',
            'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            'file' => 'Illuminate\\Http\\File',
            'arr' => 'Illuminate\\Support\\Arr',
            'collection' => 'Illuminate\\Support\\Collection',
            'validator' => 'Illuminate\\Support\\Facades\\Validator',
            'str' => 'Illuminate\\Support\\Str',
            'conversion' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
            'defaultdownloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
            'collectionposition' => 'Spatie\\MediaLibrary\\Enums\\CollectionPosition',
            'collectionhasbeenclearedevent' => 'Spatie\\MediaLibrary\\MediaCollections\\Events\\CollectionHasBeenClearedEvent',
            'filecannotbeadded' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\FileCannotBeAdded',
            'invalidbase64data' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidBase64Data',
            'invalidurl' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\InvalidUrl',
            'mediacannotbedeleted' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeDeleted',
            'mediacannotbeupdated' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MediaCannotBeUpdated',
            'mimetypenotallowed' => 'Spatie\\MediaLibrary\\MediaCollections\\Exceptions\\MimeTypeNotAllowed',
            'fileadder' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdder',
            'fileadderfactory' => 'Spatie\\MediaLibrary\\MediaCollections\\FileAdderFactory',
            'mediacollection' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaCollection',
            'mediarepository' => 'Spatie\\MediaLibrary\\MediaCollections\\MediaRepository',
            'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            'medialibrarypro' => 'Spatie\\MediaLibrary\\Support\\MediaLibraryPro',
            'pendingmedialibraryrequesthandler' => 'Spatie\\MediaLibraryPro\\PendingMediaLibraryRequestHandler',
            'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          ),
           'className' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TMedia' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TMedia',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
    ),
    1 => 
    array (
      '/Users/ghiath/Desktop/sites/fluxwork/vendor/spatie/laravel-medialibrary/src/InteractsWithMedia.php' => '2fa4c26f5b3757892fb1f79083cefb514993dbef90e48da37597f36e834ace33',
    ),
  ),
));