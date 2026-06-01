<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Users\States\Account\Active;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buyers', function (Blueprint $blueprint) {
            $blueprint->ulid('id')->primary();
            $blueprint->string('username')->unique();
            $blueprint->string('display_name');
            $blueprint->string('locale')->default(config('app.locale'));
            $blueprint->string('timezone')->default(config('app.timezone'));
            $blueprint->string('currency')->nullable();
            $blueprint->string('country')->nullable();
            $blueprint->string('email')->unique();
            $blueprint->string('account_state')->default(Active::class);
            $blueprint->timestamp('suspended_at')->nullable();
            $blueprint->string('suspension_reason')->nullable();
            $blueprint->timestamp('last_login_at')->nullable();
            $blueprint->string('last_login_ip')->nullable();
            $blueprint->timestamp('email_verified_at')->nullable();
            $blueprint->string('password');
            $blueprint->rememberToken();
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
