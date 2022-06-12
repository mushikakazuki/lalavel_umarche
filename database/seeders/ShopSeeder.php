<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'ここに店名が入ります。',
                'information' => 'ここにお店情報が入ります。ここにお店情報が入ります。ここにお店情報が入ります。ここにお店情報が入ります。',
                'filename' => 'ファイル名',
                'is_selling' => true,
                'created_at' => '2022/06/01 00:00:00'
            ],
            [
                'owner_id' => 2,
                'name' => 'ここに店名が入ります。',
                'information' => 'ここにお店情報が入ります。ここにお店情報が入ります。ここにお店情報が入ります。ここにお店情報が入ります。',
                'filename' => 'ファイル名',
                'is_selling' => true,
                'created_at' => '2022/06/01 00:00:00'
            ],
        ]);
    }
}
