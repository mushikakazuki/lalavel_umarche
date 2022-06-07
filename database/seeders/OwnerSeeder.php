<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/06/01 00:00:00'
            ],
            [
                'name' => 'test2',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/06/01 00:00:00'
            ],
            [
                'name' => 'test3',
                'email' => 'test3@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/06/01 00:00:00'
            ],
            [
                'name' => 'test4',
                'email' => 'test4@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/06/01 00:00:00'
            ],
            [
                'name' => 'test5',
                'email' => 'test5@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/06/01 00:00:00'
            ],           [
                'name' => 'test6',
                'email' => 'test6@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/06/01 00:00:00'
            ]
        ]);
    }
}
