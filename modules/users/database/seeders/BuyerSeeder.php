<?php

declare(strict_types=1);

namespace Modules\Users\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Users\Models\Buyer;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buyer::factory()->create([
            'username' => 'buyer',
            'display_name' => 'Buyer User',
            'email' => 'buyer@example.com',
        ]);
    }
}
