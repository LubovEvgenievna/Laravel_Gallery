<?php

namespace Database\Seeds;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WorkTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('work')->delete();
        DB::table('work')->insert([
            [
                'title' => 'Изображение 1',
                'img' => 'img1',
                'description' => 'Описание Изображения 1',
                'worktype_sort_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Изображение 2',
                'img' => 'img2',
                'description' => 'Описание Изображения 2',
                'worktype_sort_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Изображение 3',
                'img' => 'img3',
                'description' => 'Описание Изображения 3',
                'worktype_sort_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Изображение 4',
                'img' => 'img4',
                'description' => 'Описание Изображения 4',
                'worktype_sort_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Изображение 5',
                'img' => 'img5',
                'description' => 'Описание Изображения 5',
                'worktype_sort_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Изображение 6',
                'img' => 'img6',
                'description' => 'Описание Изображения 6',
                'worktype_sort_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Изображение 7',
                'img' => 'img7',
                'description' => 'Описание Изображения 7',
                'worktype_sort_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
            ]);
    }
}