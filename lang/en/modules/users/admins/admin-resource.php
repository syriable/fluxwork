<?php

declare(strict_types=1);

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
                    'display_name' => [
                        'label' => 'Display Name',
                    ],
                    'email' => [
                        'label' => 'Email',
                    ],
                    'locale' => [
                        'label' => 'Locale',
                    ],
                    'timezone' => [
                        'label' => 'Timezone',
                    ],
                    'account_state' => [
                        'label' => 'Account State',
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
