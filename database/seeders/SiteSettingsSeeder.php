<?php

namespace Database\Seeders;

use App\Models\SiteSettings;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSettings::create([
            'id' => 1,
            'title' => 'Bitirme Projesi',
            'url' => 'http://localhost',
            'statu' => '0',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
