<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RecommendbooksTableSeeder::class);
        $this->call(CataloguebooksTableSeeder::class);
        $this->call(VotesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);

    }
}
