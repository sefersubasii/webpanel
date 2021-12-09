<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $this->createDogusTeaCategories();
        $this->createDogusSugarCategories();
        $this->createDogusTomatPasteCategories();
    }

    private function createDogusTeaCategories()
    {
        $dogusCay = Category::create([
            'title'       => [
                'tr' => 'Doğuş Çay',
                'en' => 'Doğuş Tea',
            ],
            'image'       => '',
            'header_image' => '',
        ]);

        $siyahCaylar = $dogusCay->children()->create([
            'title'       => [
                'tr' => 'Siyah Çaylar',
                'en' => 'Black Teas',
            ],
            'image'       => 'images/siyah_cay.jpg',
            'header_image' => '',
        ]);
        $this->createCommonSubCategories($siyahCaylar);

        $yesilCaylar = $dogusCay->children()->create([
            'title'       => [
                'tr' => 'Yeşil Çaylar',
                'en' => 'Green Teas',
            ],
            'image'       => 'images/yesil_caylar.jpg',
            'header_image' => '',
        ]);
        $this->createCommonSubCategories($yesilCaylar);

        $bitkiCaylari = $dogusCay->children()->create([
            'title'       => [
                'tr' => 'Bitki Çayları',
                'en' => 'Herbal Teas',
            ],
            'image'       => 'images/bitki_caylari.jpg',
            'header_image' => '',
        ]);
        $this->createCommonSubCategories($bitkiCaylari);

        $meyveCaylari = $dogusCay->children()->create([
            'title'       => [
                'tr' => 'Meyve Çayları',
                'en' => 'Fruit Teas',
            ],
            'image'       => 'images/meyve_caylari.jpg',
            'header_image' => '',
        ]);
        $this->createCommonSubCategories($meyveCaylari);

        $fonksiyonelCaylar = $dogusCay->children()->create([
            'title'       => [
                'tr' => 'Fonksiyonel Çaylar',
                'en' => 'Functional Teas',
            ],
            'image'       => 'images/form_cay.jpg',
            'header_image' => '',
        ]);
        $this->createCommonSubCategories($fonksiyonelCaylar);

        $mistikCaylar = $dogusCay->children()->create([
            'title'       => [
                'tr' => 'Mistik Çaylar',
                'en' => 'Mystical Teas',
            ],
            'image'       => 'images/mistik_caylar.jpg',
            'header_image' => '',
        ]);
        $this->createCommonSubCategories($mistikCaylar);
    }

    /**
     * @param mixed $model
     * @return void
     */
    private function createCommonSubCategories(&$model)
    {
        $model->children()->create([
            'title'       => [
                'tr' => 'Dökme Çaylar',
                'en' => 'Bulk Teas',
            ],
            'image'       => '',
            'header_image' => '',
        ]);

        $model->children()->create([
            'title'       => [
                'tr' => 'Demlik Poşet Çaylar',
                'en' => 'Teapot Bag Teas',
            ],
            'image'       => '',
            'header_image' => '',
        ]);

        $model->children()->create([
            'title'       => [
                'tr' => 'Bardak Poşet Çaylar',
                'en' => 'Cup Bag Teas',
            ],
            'image'       => '',
            'header_image' => '',
        ]);

        $model->children()->create([
            'title'       => [
                'tr' => 'Catering Çaylar',
                'en' => 'Catering Teas',
            ],
            'image'       => '',
            'header_image' => '',
        ]);

        $model->children()->create([
            'title'       => [
                'tr' => 'Tomurcuk',
                'en' => 'Bud',
            ],
            'image'       => '',
            'header_image' => '',
        ]);
    }

    private function createDogusSugarCategories()
    {
        $dogusSeker = Category::create([
            'title'       => [
                'tr' => 'Doğuş Şeker',
                'en' => 'Doğuş Sugar',
            ],
            'image'       => '',
            'header_image' => 'upload/seker_ust_baslik_resim.jpg',
        ]);
        copy(
            public_path('images/seker_ust_baslik_resim.jpg'),
            storage_path('app/public/upload/seker_ust_baslik_resim.jpg')
        );

        $dogusSeker->children()->create([
            'title'       => [
                'tr' => 'Küp Şeker',
                'en' => 'Cube Sugar',
            ],
            'image'       => 'upload/kup_seker_ust.jpg',
            'header_image' => '',
        ]);
        copy(
            public_path('images/kup_seker_ust.jpg'),
            storage_path('app/public/upload/kup_seker_ust.jpg')
        );

        $dogusSeker->children()->create([
            'title'       => [
                'tr' => 'Toz Şeker',
                'en' => 'Granulated Sugar',
            ],
            'image'       => 'upload/toz_seker_ust.jpg',
            'header_image' => '',
        ]);
        copy(
            public_path('images/toz_seker_ust.jpg'),
            storage_path('app/public/upload/toz_seker_ust.jpg')
        );
    }

    private function createDogusTomatPasteCategories()
    {
        Category::create([
            'title'       => [
                'tr' => 'Doğuş Salça',
                'en' => 'Dogus Tomato Paste',
            ],
            'image'       => '',
            'header_image' => '',
        ]);
    }
}
