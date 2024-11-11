<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();

        Product::factory()->create([
            'name' => 'Internal Audit Management',
            'description' => NULL,
            'status' => '1',
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // Insert second specific product
        Product::factory()->create([
            'name' => 'Enterprise Risk Management',
            'description' => NULL,
            'status' => '1',
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
