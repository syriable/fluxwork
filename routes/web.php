<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', fn () => view('welcome'));
Auth::logout();
// Auth::attempt(['email' => 'buyer@example.com', 'password' => 'password']);
