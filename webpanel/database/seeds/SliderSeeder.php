<?php

use App\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::truncate();

        Slider::create([
            'title' => [
                'tr' => 'EN GÜZEL ÇAY DOĞUŞ ÇAY',
                'en' => 'THE MOST BEAUTIFUL TEA DOGUS TEA'
            ],
            'link' => [
                'tr' => url('/tr-test'),
                'en' => url('/en-test')
            ],
            'image' => 'upload/dogus_statik_slider_1_yeni.jpg',
            'mobile_image' => 'upload/dogus_statik_slider_mobil_1.jpg',
        ]);
        copy(
            public_path('images/dogus_statik_slider_1_yeni.jpg'),
            storage_path('app/public/upload/dogus_statik_slider_1_yeni.jpg')
        );
        copy(
            public_path('images/dogus_statik_slider_mobil_1.jpg'),
            storage_path('app/public/upload/dogus_statik_slider_mobil_1.jpg')
        );
    }
}
