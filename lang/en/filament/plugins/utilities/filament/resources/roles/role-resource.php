<?php

declare(strict_types=1);
use BezhanSalleh\FilamentShield\Resources\Roles\RoleResource;
use Modules\Users\Filament\Resources\Admins\AdminResource;
use Modules\Users\Filament\Resources\Buyers\BuyerResource;

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
                                    RoleResource::class => [
                                        'label' => 'Roles',
                                    ],
                                    Syriable\Filament\Plugins\Utilities\Filament\Resources\Roles\RoleResource::class => [
                                        'label' => 'Roles',
                                    ],
                                ],
                            ],
                            'Admin' => [
                                'heading' => 'Admin',
                                'schema' => [
                                    AdminResource::class => [
                                        'label' => 'Admins',
                                    ],
                                ],
                            ],
                            'Buyer' => [
                                'heading' => 'Buyer',
                                'schema' => [
                                    BuyerResource::class => [
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
