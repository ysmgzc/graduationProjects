<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agreement;
use Illuminate\Support\Str;
class AgreementSeeder extends Seeder
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
            $title = $faker->title();
            Agreement::create([
                'title'=> $title,
                'content'=>$faker->text($maxNbChars = 500),
                'status' => 1,
                'slug'=> Str::slug($title),
                'keywords'=>'Deneme, dkajshd, asjda, asdkahsd, asjgasd, axcmbnxzc, werıuuewro,',
                'description' => $faker->text($maxNbChars = 150),
            ]);
        }
    }
}
