<?php

use App\Product;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $this->createDogusCayProducts();
        $this->createDogusSekerProducts();
    }

    protected function createDogusCayProducts()
    {
        $this->createDokmeCaylarProducts();
        $this->createDemlikPosetCaylarProducts();
        $this->createBardakPosetCaylarProducts();
        $this->createCateringCaylarProducts();
        $this->createTomurcukProducts();
    }

    protected function createDokmeCaylarProducts()
    {
        Product::create([
            'category_id' => 3,
            'name' => [
                'tr' => 'Filiz Çayı',
                'en' => 'Filiz Tea',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [200, 400, 600],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/Filiz 500gr.png',
        ]);
        copy(
            public_path('images/products/dokme-caylar/450x300/Filiz 500gr.png'),
            storage_path('app/public/upload/Filiz 500gr.png')
        );

        Product::create([
            'category_id' => 3,
            'name' => [
                'tr' => 'Gurme Çay',
                'en' => 'Gourmet Tea',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [200, 400, 600],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/gurmecay.png',
        ]);
        copy(
            public_path('images/gurmecay.png'),
            storage_path('app/public/upload/gurmecay.png')
        );
    }

    protected function createDemlikPosetCaylarProducts()
    {
        Product::create([
            'category_id' => 4,
            'name' => [
                'tr' => 'Black Label',
                'en' => 'Black Label',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [200, 400, 600],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/Filiz 500gr.png',
        ]);
        copy(
            public_path('images/products/dokme-caylar/450x300/Filiz 500gr.png'),
            storage_path('app/public/upload/Filiz 500gr.png')
        );

        Product::create([
            'category_id' => 4,
            'name' => [
                'tr' => 'Karadeniz',
                'en' => 'Black Sea',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [200, 400, 600],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/demlik-poset-2.png',
        ]);
        copy(
            public_path('images/demlik-poset-2.png'),
            storage_path('app/public/upload/demlik-poset-2.png')
        );
    }

    protected function createBardakPosetCaylarProducts()
    {
        Product::create([
            'category_id' => 5,
            'name' => [
                'tr' => 'Gurme',
                'en' => 'Gourmet',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [200, 400, 600],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/bardak-poset-1.png',
        ]);
        copy(
            public_path('images/bardak-poset-1.png'),
            storage_path('app/public/upload/bardak-poset-1.png')
        );

        Product::create([
            'category_id' => 5,
            'name' => [
                'tr' => 'Earl Grey',
                'en' => 'Earl Grey',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [200, 400, 600],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/bardak-poset-3.png',
        ]);
        copy(
            public_path('images/bardak-poset-3.png'),
            storage_path('app/public/upload/bardak-poset-3.png')
        );
    }

    protected function createCateringCaylarProducts()
    {
        Product::create([
            'category_id' => 6,
            'name' => [
                'tr' => 'Geleneksel Rize Çayı',
                'en' => 'Traditional Rize Tea',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [200, 400, 600],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/catering-1.png',
        ]);
        copy(
            public_path('images/catering-1.png'),
            storage_path('app/public/upload/catering-1.png')
        );

        Product::create([
            'category_id' => 6,
            'name' => [
                'tr' => 'Tiryaki Karadeniz Çayı',
                'en' => 'Addicted Black Sea Tea',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [200, 400, 600],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/catering-4.png',
        ]);
        copy(
            public_path('images/catering-4.png'),
            storage_path('app/public/upload/catering-4.png')
        );
    }

    protected function createTomurcukProducts()
    {
        Product::create([
            'category_id' => 7,
            'name' => [
                'tr' => 'Tomurcuk Çay 100gr',
                'en' => 'Bud Tea 100gr',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [100],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/tomurcuk-1.png',
        ]);
        copy(
            public_path('images/tomurcuk-1.png'),
            storage_path('app/public/upload/tomurcuk-1.png')
        );

        Product::create([
            'category_id' => 7,
            'name' => [
                'tr' => 'Tomurcuk Çay 125gr',
                'en' => 'Bud Tea 125gr',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [125],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/tomurcuk-1.png',
        ]);
        copy(
            public_path('images/tomurcuk-1.png'),
            storage_path('app/public/upload/tomurcuk-1.png')
        );
    }

    protected function createDogusSekerProducts()
    {
        Product::create([
            'category_id' => 39,
            'name' => [
                'tr' => 'Küp Şeker',
                'en' => 'Cube Sugar',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/kup-1.png',
        ]);
        copy(
            public_path('images/kup-1.png'),
            storage_path('app/public/upload/kup-1.png')
        );

        Product::create([
            'category_id' => 30,
            'name' => [
                'tr' => 'Toz Şeker',
                'en' => 'Granulated Sugar',
            ],
            'barcode' => '869 0719 110224',
            'gram' => [],
            'content' => [
                'tr' => 'Çay tiryakilerinin demli bir çayda aradığı bütün özellikler bir çayda… Dem oranı yüksek, lezzeti tarifsiz.',
                'en' => 'All the features that tea drinkers are looking for in a brewed tea are all in one tea.',
            ],
            'image' => 'upload/toz-1.png',
        ]);
        copy(
            public_path('images/toz-1.png'),
            storage_path('app/public/upload/toz-1.png')
        );
    }
}
