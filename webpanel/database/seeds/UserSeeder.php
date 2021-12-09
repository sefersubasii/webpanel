<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $user->truncate();

        $user->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
