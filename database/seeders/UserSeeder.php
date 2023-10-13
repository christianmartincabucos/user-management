<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin 1',
                'usertype' => 'admin',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Admin 2',
                'usertype' => 'admin',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
