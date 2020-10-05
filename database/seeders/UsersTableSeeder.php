<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'username' => 'login2',
            'password' => bcrypt('login2login'),
            'name' => 'Loginer',
            'email' => 'admin@admin.com',
            'email_verified_at' => '2020-09-17 06:00:43'
        ]);
    }
}
