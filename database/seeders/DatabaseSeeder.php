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
        $this-> call ([SharesSeeder::class, UsersSeeder::class,LikesSeeder::class,CommentsSeeder::class]);
    }
}
