<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
// ilgili model ve factory importu
use Faker\Factory;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++)
        {
            $faker = Factory::create();

            User::create([
                'name'=>$faker->name(),
                'email'=>$faker->email(),
                'email_verified_at' => now(),
                'password'=>bcrypt('12345678'),
                'image'=>$faker->imageUrl(640, 480, 'cats'),
                'remember_token' => Str::random(10),
            ]);
        }
        User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('12345678'),
            'image'=>$faker->imageUrl(640, 480, 'cats'),
            'remember_token' => Str::random(10),
        ]);

    }
}
