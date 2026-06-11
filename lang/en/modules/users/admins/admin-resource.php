<?php

return [
    'model_label' => 'Admin',
    'model_plural_label' => 'Admins',
    'navigation_label' => 'Admins',
    'navigation_group' => 'Users',
    'form' => [
        'components' => [
            'details' => [
                'heading' => 'Details',
                'schema' => [
                    'username' => [
                        'label' => 'Username',
                    ],
                ],
            ],
        ],
    ],
    'table' => [
        'actions' => [
            'activities' => [
                'schema' => [
                    'components' => [
                        'activities' => [
                            'label' => 'Activities',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
