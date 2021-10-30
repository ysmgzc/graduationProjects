<?php

namespace Database\Factories;

use App\Models\Smtp_settings;
use Illuminate\Database\Eloquent\Factories\Factory;

class Smtp_settingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Smtp_settings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => 1,
            'server_name' => 'smtp.yandex.com.tr',
            'username' => 'tugrandemirel@yazi-yorum.org',
            'password' => 'yuqoojltfxtqdnbz',
            'encryption' => 'tls',
            'port' => '587',
        ];
    }
}
