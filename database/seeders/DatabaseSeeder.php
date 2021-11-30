<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(Smtp_settingsSeeder::class);
        $this->call(SiteSettingsSeeder::class);
        $this->call(AgreementSeeder::class);
        $this->call(Brand::class);
    }
}
