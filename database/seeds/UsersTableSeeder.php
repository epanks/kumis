<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'epank',
            'email' => 'admin@pusatab.com',
            'email_verified_at' => now(),
            'photo' => 'profil.jpg',
            'password' => bcrypt('12345678'),
            'role' => 0
        ]);
    }
}
