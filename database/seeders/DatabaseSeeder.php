<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Poll::factory(10)->create();
        \App\Models\Question::factory(10)->create();
        \App\Models\Answer::factory(10)->create();


    }
}
