<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB ;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'role' => 'admin',
            'password' => bcrypt(123456),
        ]);
        DB::table('users')->insert([
            'name' => 'customer',
            'email' => 'customer@email.com',
            'role' => 'customer',
            'password' => bcrypt(123456),
        ]);
    }
}
