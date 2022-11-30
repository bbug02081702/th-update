<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('motels')->insert([
            'title' => 'Cho thue phong tro tai phong dinh cang',
            'category_id' => '1',
            'price' => '1300000',
            'approve' => 'Da kiem duyet',
        ]);
    }
}
