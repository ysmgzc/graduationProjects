<?php

namespace Database\Seeders;

use App\Models\Smtp_settings;
use Illuminate\Database\Seeder;

class Smtp_settingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Smtp_settings::factory(1)->create();
    }
}
