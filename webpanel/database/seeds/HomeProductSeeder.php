<?php

use App\HomeProduct;
use Illuminate\Database\Seeder;

class HomeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(HomeProduct $homeProduct)
    {
        $homeProduct->truncate();

        $homeProduct->create([
            'title' => [
                'tr' => 'Doğuş Filiz Çayı',
                'en' => 'Doğuş Filiz Tea',
            ],
            'image' => 'upload/tea.jpg',
            'bg_image' => 'upload/cay_yaprak.png',
            'image_position' => 'left',
            'button_text' => [
                'tr' => 'Tüm Çayları Gör',
                'en' => 'See All Tea',
            ],
            'button_link' => '#',
        ]);
        copy(public_path('images/tea.jpg'), storage_path('app/public/upload/tea.jpg'));
        copy(public_path('images/cay_yaprak.png'), storage_path('app/public/upload/cay_yaprak.png'));

        $homeProduct->create([
            'title' => [
                'tr' => 'Doğuş Cips',
                'en' => 'Doğuş Chips',
            ],
            'image' => 'upload/cips-big.jpg',
            'bg_image' => 'upload/cips.png',
            'image_position' => 'right',
            'button_text' => [
                'tr' => 'Tüm Cipsleri Gör',
                'en' => 'See All Chips',
            ],
            'button_link' => '#',
        ]);
        copy(public_path('images/cips-big.jpg'), storage_path('app/public/upload/cips-big.jpg'));
        copy(public_path('images/cips.png'), storage_path('app/public/upload/cips.png'));

        $homeProduct->create([
            'title' => [
                'tr' => 'Doğuş Salça',
                'en' => 'Doğuş Tomato Paste',
            ],
            'image' => 'upload/tomato-paste.jpg',
            'bg_image' => 'upload/tomato.png',
            'image_position' => 'left',
            'button_text' => [
                'tr' => 'Tüm Salçaları Gör',
                'en' => 'See All Tomatoes',
            ],
            'button_link' => '#',
        ]);
        copy(public_path('images/tomato-paste.jpg'), storage_path('app/public/upload/tomato-paste.jpg'));
        copy(public_path('images/tomato.png'), storage_path('app/public/upload/tomato.png'));

        $homeProduct->create([
            'title' => [
                'tr' => 'Doğuş Şeker',
                'en' => 'Doğuş Sugar',
            ],
            'image' => 'upload/sugar-big.jpg',
            'bg_image' => 'upload/sugar2.png',
            'image_position' => 'right',
            'button_text' => [
                'tr' => 'Tüm Şekerleri Gör',
                'en' => 'See All Candies',
            ],
            'button_link' => '#',
        ]);
        copy(public_path('images/sugar-big.jpg'), storage_path('app/public/upload/sugar-big.jpg'));
        copy(public_path('images/sugar2.png'), storage_path('app/public/upload/sugar2.png'));

        $homeProduct->create([
            'title' => [
                'tr' => 'Doğuş ORIGINAL Ice Tea',
                'en' => 'Doğuş ORIGINAL Ice Tea',
            ],
            'image' => 'upload/dogus_icecek_yeni.jpg',
            'bg_image' => 'upload/icecek_sag_alt.png',
            'image_position' => 'left',
            'button_text' => [
                'tr' => "Tüm Original Ice Tea'ları Gör",
                'en' => 'See All Original Ice Teas',
            ],
            'button_link' => '#',
        ]);
        copy(public_path('images/dogus_icecek_yeni.jpg'), storage_path('app/public/upload/dogus_icecek_yeni.jpg'));
        copy(public_path('images/icecek_sag_alt.png'), storage_path('app/public/upload/icecek_sag_alt.png'));
    }
}
