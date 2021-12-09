<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Setting $setting)
    {
        $setting->truncate();

        $setting->create([
            'name' => 'Site Başlığı',
            'type' => 'input',
            'key' => 'title',
            'value' => [
                'tr' => 'Doğuş Çay | En Güzel Doğuş Çay',
                'en' => 'Dogus Cay | The Best Dogus Tea',
            ],
        ]);

        $setting->create([
            'name' => 'Logo',
            'type' => 'image',
            'key' => 'logo',
            'value' => 'images/Doğuş Orta Logo.png',
            'is_translatable' => false,
        ]);

        $setting->create([
            'name' => 'Anasayfa Kayan Logo',
            'type' => 'image',
            'key' => 'floating_logo',
            'value' => 'images/Doğuş Orta Logo.png',
            'is_translatable' => false,
        ]);

        $setting->create([
            'name' => 'Adres',
            'type' => 'textarea',
            'key' => 'address',
            'value' => 'Altıntepe Mah. Cihadiye Cad. No:94 Maltepe - İstanbul',
            'is_translatable' => false,
        ]);

        $setting->create([
            'name' => 'Telefon',
            'type' => 'input',
            'key' => 'phone',
            'value' => '+90 216 587 53 00 (PBX)',
            'is_translatable' => false,
        ]);

        $setting->create([
            'name' => 'Telefon 2',
            'type' => 'input',
            'key' => 'phone2',
            'value' => '+90 216 367 53 00',
            'is_translatable' => false,
        ]);

        $setting->create([
            'name' => 'Telefon 3',
            'type' => 'input',
            'key' => 'phone3',
            'value' => '+90 518 31 42',
            'is_translatable' => false,
        ]);

        $setting->create([
            'name' => 'Tüketici Danışma Hattı',
            'type' => 'input',
            'key' => 'callcenter',
            'value' => '444 97 53',
            'is_translatable' => false,
        ]);


        $setting->create([
            'name' => 'Copyright',
            'type' => 'input',
            'key' => 'copyright',
            'value' => [
                'tr' => 'Copyright © 2020 Doğuş Yiyecek İçecek',
                'en' => 'Copyright © 2020 Doğuş Food & Drink',
            ]
        ]);

        $setting->create([
            'name' => 'E-Posta (İletişim Formlarının Gönderileceği)',
            'type' => 'input',
            'key' => 'email.contact',
            'is_translatable' => false,
        ]);
    }
}
