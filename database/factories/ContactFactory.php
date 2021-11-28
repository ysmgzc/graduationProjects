<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'whatsapp' => '05443380633',
            'facebook' => 'https://www.facebook.com/TTugranDemirel/',
            'instagram' => 'https://www.instagram.com/demirel.tugran/',
            'twitter' => 'https://twitter.com/tugrandemirel',
            'address' => 'Yozgat',
            'contact_mail' => 'demireltugran66@gmail.com'
        ];
    }
}
