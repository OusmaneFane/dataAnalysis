<?php

namespace Database\Seeders;

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
        for ($i = 0; $i < 2; $i++) {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'name' => "admin$i",
                "email" => "admin$i@test.com",
                "password" => bcrypt('test')
            ]);
        }
    }
}
