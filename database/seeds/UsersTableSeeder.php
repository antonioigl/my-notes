<?php

use App\User;
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
            'name' => 'Name',
            'email' => 'email@email.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
