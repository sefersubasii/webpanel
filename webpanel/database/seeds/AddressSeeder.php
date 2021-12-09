<?php

use App\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Address $address)
    {
        $address->truncate();

        $address->create([
            'title' => [
                'tr' => 'GENEL MÜDÜRLÜK',
                'en' => 'HEADQUARTERS'
            ],
            'email' => 'info@doguscay.com.tr',
            'phone' => '0216 587 53 00 (PBX)',
            'fax' => '0216 587 53 00 - 587 31 42',
            'address' => 'Altıntepe Mah. Cihadiye Cad. No:94 Maltepe-İstanbul',
            'map' => '<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.0981800903965!2d29.10839971541251!3d40.957427979305926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac6f5e533ca65%3A0x293188a12d93ae95!2zS8O8w6fDvGt5YWzEsSwgQ2loYWRpeWUgQ2QuIE5vOjk0LCAzNDg0MCBNYWx0ZXBlL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1585867763433!5m2!1str!2str" allowfullscreen=""></iframe>',
        ]);

        $address->create([
            'title' => [
                'tr' => 'RİZE BÖLGE MÜDÜRLÜĞÜ',
                'en' => 'RIZE REGIONAL OFFICE'
            ],
            'email' => 'info@doguscay.com.tr',
            'phone' => '0216 587 53 00 (PBX)',
            'fax' => '0216 587 53 00 - 587 31 42',
            'address' => 'Altıntepe Mah. Cihadiye Cad. No:94 Maltepe-İstanbul',
            'map' => '<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.0981800903965!2d29.10839971541251!3d40.957427979305926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac6f5e533ca65%3A0x293188a12d93ae95!2zS8O8w6fDvGt5YWzEsSwgQ2loYWRpeWUgQ2QuIE5vOjk0LCAzNDg0MCBNYWx0ZXBlL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1585867763433!5m2!1str!2str" allowfullscreen=""></iframe>',
        ]);

        $address->create([
            'title' => [
                'tr' => 'ORDU ÇAY PAKETLEME FABRİKASI',
                'en' => 'ORDU TEA PACKAGING FACTORY'
            ],
            'email' => 'info@doguscay.com.tr',
            'phone' => '0216 587 53 00 (PBX)',
            'fax' => '0216 587 53 00 - 587 31 42',
            'address' => 'Altıntepe Mah. Cihadiye Cad. No:94 Maltepe-İstanbul',
            'map' => '<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.0981800903965!2d29.10839971541251!3d40.957427979305926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac6f5e533ca65%3A0x293188a12d93ae95!2zS8O8w6fDvGt5YWzEsSwgQ2loYWRpeWUgQ2QuIE5vOjk0LCAzNDg0MCBNYWx0ZXBlL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1585867763433!5m2!1str!2str" allowfullscreen=""></iframe>',
        ]);

        $address->create([
            'title' => [
                'tr' => 'İZMİR SOĞUK ÇAY ÜRETİM FABRİKASI',
                'en' => 'İZMİR COLD TEA PRODUCTION FACTORY'
            ],
            'email' => 'info@doguscay.com.tr',
            'phone' => '0216 587 53 00 (PBX)',
            'fax' => '0216 587 53 00 - 587 31 42',
            'address' => 'Altıntepe Mah. Cihadiye Cad. No:94 Maltepe-İstanbul',
            'map' => '<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.0981800903965!2d29.10839971541251!3d40.957427979305926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac6f5e533ca65%3A0x293188a12d93ae95!2zS8O8w6fDvGt5YWzEsSwgQ2loYWRpeWUgQ2QuIE5vOjk0LCAzNDg0MCBNYWx0ZXBlL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1585867763433!5m2!1str!2str" allowfullscreen=""></iframe>',
        ]);

        $address->create([
            'title' => [
                'tr' => 'İZMİR SALÇA ÜRETİM FABRİKASI',
                'en' => 'IZMIR PASTE PRODUCTION FACTORY'
            ],
            'email' => 'info@doguscay.com.tr',
            'phone' => '0216 587 53 00 (PBX)',
            'fax' => '0216 587 53 00 - 587 31 42',
            'address' => 'Altıntepe Mah. Cihadiye Cad. No:94 Maltepe-İstanbul',
            'map' => '<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.0981800903965!2d29.10839971541251!3d40.957427979305926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac6f5e533ca65%3A0x293188a12d93ae95!2zS8O8w6fDvGt5YWzEsSwgQ2loYWRpeWUgQ2QuIE5vOjk0LCAzNDg0MCBNYWx0ZXBlL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1585867763433!5m2!1str!2str" allowfullscreen=""></iframe>',
        ]);

        $address->create([
            'title' => [
                'tr' => 'AKSARAY CİPS ÜRETİM FABRİKASI',
                'en' => 'AKSARAY CHIPS PRODUCTION FACTORY'
            ],
            'email' => 'info@doguscay.com.tr',
            'phone' => '0216 587 53 00 (PBX)',
            'fax' => '0216 587 53 00 - 587 31 42',
            'address' => 'Altıntepe Mah. Cihadiye Cad. No:94 Maltepe-İstanbul',
            'map' => '<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.0981800903965!2d29.10839971541251!3d40.957427979305926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac6f5e533ca65%3A0x293188a12d93ae95!2zS8O8w6fDvGt5YWzEsSwgQ2loYWRpeWUgQ2QuIE5vOjk0LCAzNDg0MCBNYWx0ZXBlL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1585867763433!5m2!1str!2str" allowfullscreen=""></iframe>',
        ]);

        $address->create([
            'title' => [
                'tr' => 'PENDİK CİPS ÜRETİM FABRİKASI',
                'en' => 'PENDİK CHIPS PRODUCTION FACTORY'
            ],
            'email' => 'info@doguscay.com.tr',
            'phone' => '0216 587 53 00 (PBX)',
            'fax' => '0216 587 53 00 - 587 31 42',
            'address' => 'Altıntepe Mah. Cihadiye Cad. No:94 Maltepe-İstanbul',
            'map' => '<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.0981800903965!2d29.10839971541251!3d40.957427979305926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac6f5e533ca65%3A0x293188a12d93ae95!2zS8O8w6fDvGt5YWzEsSwgQ2loYWRpeWUgQ2QuIE5vOjk0LCAzNDg0MCBNYWx0ZXBlL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1585867763433!5m2!1str!2str" allowfullscreen=""></iframe>',
        ]);

        $address->create([
            'title' => [
                'tr' => 'AFYON ŞEKER ÜRETİM FABRİKASI',
                'en' => 'AFYON SUGAR PRODUCTION FACTORY'
            ],
            'email' => 'info@doguscay.com.tr',
            'phone' => '0216 587 53 00 (PBX)',
            'fax' => '0216 587 53 00 - 587 31 42',
            'address' => 'Altıntepe Mah. Cihadiye Cad. No:94 Maltepe-İstanbul',
            'map' => '<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.0981800903965!2d29.10839971541251!3d40.957427979305926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac6f5e533ca65%3A0x293188a12d93ae95!2zS8O8w6fDvGt5YWzEsSwgQ2loYWRpeWUgQ2QuIE5vOjk0LCAzNDg0MCBNYWx0ZXBlL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1585867763433!5m2!1str!2str" allowfullscreen=""></iframe>',
        ]);
    }
}
