<?php

use Illuminate\Database\Seeder;
use Database\Seeds\BodyTableSeeder;
use Database\Seeds\WorkTableSeeder;
use Database\Seeds\WorktypeTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BodyTableSeeder::class);
        $this->call(WorkTableSeeder::class);
        $this->call(WorktypeTableSeeder::class);

        $this->command->info('Таблица пользователей загружена данными!');
    }
 }



