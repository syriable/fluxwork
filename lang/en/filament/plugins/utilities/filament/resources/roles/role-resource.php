<?php

return [
    'form' => [
        'components' => [
            'details' => [
                'heading' => 'Details',
            ],
            'tabs' => [
                'tab' => [
                    'resources' => [
                        'schema' => [
                            'Role' => [
                                'heading' => 'Role',
                                'schema' => [
                                    'BezhanSalleh\\FilamentShield\\Resources\\Roles\\RoleResource' => [
                                        'label' => 'Roles',
                                    ],
                                    'Syriable\\Filament\\Plugins\\Utilities\\Filament\\Resources\\Roles\\RoleResource' => [
                                        'label' => 'Roles',
                                    ],
                                ],
                            ],
                            'Admin' => [
                                'heading' => 'Admin',
                                'schema' => [
                                    'Modules\\Users\\Filament\\Resources\\Admins\\AdminResource' => [
                                        'label' => 'Admins',
                                    ],
                                ],
                            ],
                            'Buyer' => [
                                'heading' => 'Buyer',
                                'schema' => [
                                    'Modules\\Users\\Filament\\Resources\\Buyers\\BuyerResource' => [
                                        'label' => 'Buyers',
                                    ],
                                ],
                            ],
                        ],
                        'label' => 'Resources',
                    ],
                ],
            ],
        ],
    ],
    'table' => [
        'columns' => [
            'name' => [
                'label' => 'Name',
            ],
            'guard_name' => [
                'label' => 'Guard Name',
            ],
            'team->name' => [
                'label' => 'Team >Name',
            ],
            'permissions_count' => [
                'label' => 'Permissions Count',
            ],
            'updated_at' => [
                'label' => 'Updated At',
            ],
            'users_count' => [
                'label' => 'Users Count',
            ],
        ],
    ],
];
