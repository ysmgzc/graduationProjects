<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\SiteSettings;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteSettingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SiteSettings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => 1,
            'title' => 'Bitirme Projesi',
            'url' => 'http://localhost',
            'statu' => '1',
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
