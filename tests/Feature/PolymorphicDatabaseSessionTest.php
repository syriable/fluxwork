<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Modules\Users\Models\Admin;
use Modules\Users\Models\Buyer;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

beforeEach(function () {
    config(['session.driver' => 'database']);
});

test('stores polymorphic buyer on session write', function () {
    $buyer = Buyer::factory()->create();

    actingAs($buyer);

    get('/');

    expect(DB::table('sessions')
        ->where('user_id', $buyer->getKey())
        ->where('user_type', $buyer->getMorphClass())
        ->exists()
    )->toBeTrue();
});

test('stores polymorphic admin when authenticated via admin guard', function () {
    $admin = Admin::factory()->create();

    actingAs($admin, 'admin');

    get('/');

    expect(DB::table('sessions')
        ->where('user_id', $admin->getKey())
        ->where('user_type', $admin->getMorphClass())
        ->exists()
    )->toBeTrue();
});

test('does not associate a morph when unauthenticated', function () {
    get('/');

    expect(DB::table('sessions')->whereNotNull('user_id')->exists())->toBeFalse();
    expect(DB::table('sessions')->whereNotNull('user_type')->exists())->toBeFalse();
});
