<?php

namespace Database\Factories;

use App\Models\Agreement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AgreementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agreement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->title();
        return [
            'title'=> $title,
            'content'=>$this->faker->text($maxNbChars = 500),
            'status' => 1,
            'slug'=> Str::slug($title),
            'keywords'=>'Deneme, keywords, key, word, asjgasd, axcmbnxzc, werıuuewro,',
            'description'=>$this->faker->text(200)
        ];
    }
}
