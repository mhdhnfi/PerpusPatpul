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
                'id' => 1,
                'name' => 'Napi',
                'email' => 'napi@gmail.com',
                'password' => Hash::make('napi123'),
                'admin' => (1),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            ]);
    }
}
