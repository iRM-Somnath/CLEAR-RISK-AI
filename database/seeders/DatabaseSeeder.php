<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\SiteSettings;

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

        SiteSettings::factory()->create([
            'logo' => null,
            'favicon' => null,
            'smtp_user_id' => null,
            'smtp_password' => null,
            'smtp_port' => null,
            'sender_mail' => null,
            'sender_name' => null,
            'phone_no' => null,
            'contact_address' => null,
            'footer_short_desc' => null,
            'receiver_mail_id' => null,
        ]);
    }
}
