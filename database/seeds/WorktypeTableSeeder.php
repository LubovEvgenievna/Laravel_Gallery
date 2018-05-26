<?php

namespace Database\Seeds;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WorktypeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('worktype')->delete();
        DB::table('worktype')->insert([
            [
                'title' => 'Категория 1',
                'sort_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Категория 2',
                'sort_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Категория 3',
                'sort_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Категория 4',
                'sort_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}