<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Modules\Users\Mail\WelcomeBuyerMail;
use Modules\Users\Models\Buyer;
use Spatie\Activitylog\Models\Activity;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

it('grants the buyer role when a buyer is created', function () {
    Mail::fake();

    $buyer = Buyer::factory()->create();
    $buyer->refresh();

    expect($buyer->hasRole('buyer'))->toBeTrue();
});

it('sends the welcome email to the new buyer', function () {
    Mail::fake();

    $buyer = Buyer::factory()->create();

    Mail::assertQueued(
        WelcomeBuyerMail::class,
        fn (WelcomeBuyerMail $welcomeBuyerMail) => $welcomeBuyerMail->hasTo($buyer->email)
            && $welcomeBuyerMail->buyer->is($buyer),
    );
});

it('records an activity log entry for each onboarding step', function () {
    Mail::fake();

    $buyer = Buyer::factory()->create();

    $events = Activity::query()
        ->where('log_name', 'onboarding')
        ->pluck('event');

    expect($events)->toContain('role-assigned')
        ->toContain('welcome-email-sent');
});
