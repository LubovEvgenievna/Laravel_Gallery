<?php

namespace Database\Seeds;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BodyTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('body')->delete();
        DB::table('body')->insert([
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
            'email' => 'gmail@gmail.com',
            'phone' => '89119876543',
            'address' => 'Saint-Petersburg, Russia',
            'worktime' => '9:00 - 21:00',
            'instagram' => 'http://instagram.com/',
            'vk' => 'http://vk.com/',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}