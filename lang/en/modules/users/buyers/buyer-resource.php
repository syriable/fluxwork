<?php

declare(strict_types=1);

return [
    'model_label' => 'Buyer',
    'model_plural_label' => 'Buyers',
    'navigation_label' => 'Buyers',
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
                    'password' => [
                        'label' => 'Password',
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
