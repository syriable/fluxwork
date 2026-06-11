<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Users\Database\Seeders\AdminSeeder;
use Modules\Users\Database\Seeders\BuyerSeeder;
use Database\Seeders\ShieldSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ShieldSeeder::class,
            AdminSeeder::class,
            BuyerSeeder::class,
        ]);
    }
}
