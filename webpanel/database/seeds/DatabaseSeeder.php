<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(HomeProductSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(SocialMediaSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
