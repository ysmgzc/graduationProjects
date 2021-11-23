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
    // abi şu an bütün herşeyi sildi baştan migrate etti
//            bunları bende yaptım  ama seed eklerken ya da farklı tabloya bir veri eklerken gümülyor reflesh ederken
//        tüm verileri sıfırladığın için kullanıcı yok login yapamayız
        // kayıt oluştur abi bitane
//             1 dk kerem hoca geldi bişiler diyor
//         sen kafana göre takılabilir misin hocaya bir bakıp geliyorum ben
        // tamamdır abi
//            sen istersen hataya bakın. gelirim ben okey
        ];
    }
}
