<?php

declare(strict_types=1);

return [
    'content' => [
        'components' => [
            'login_form' => [
                'heading' => 'Login to your account',
                'schema' => [
                    'form' => [
                        'actions' => [
                            'login' => [
                                'label' => 'Login',
                            ],
                        ],
                    ],
                ],
                'footer_actions' => [
                    'register' => [
                        'label' => "Don't have an account? Register here",
                    ],
                ],
            ],
        ],
    ],
    'form' => [
        'components' => [
            'email' => [
                'label' => 'Email / Username',
                'placeholder' => 'Enter your email or username',
            ],
            'password' => [
                'placeholder' => 'Enter your password',
                'label' => 'Password',
            ],
            'remember' => [
                'label' => 'Remember me',
            ],
            'actions' => [
                'facebook' => [
                    'label' => 'Continue with Facebook',
                ],
                'google' => [
                    'label' => 'Continue with Google',
                ],
                'forgot-password' => [
                    'label' => 'Forgot password?',
                ],
            ],
            'or' => [
                'text' => 'Or',
            ],
        ],
    ],
    'actions' => [
        'facebook' => [
            'label' => 'Continue with Facebook',
        ],
        'google' => [
            'label' => 'Continue with Google',
        ],
        'forgot-password' => [
            'label' => 'Forgot password?',
        ],
        'login' => [
            'label' => 'Login',
        ],
        'register' => [
            'label' => "Don't have an account? Register here",
        ],
    ],
];
