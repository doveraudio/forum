<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(IndexesTableSeeder::class);
         $this->call(ForumsTableSeeder::class);
         $this->call(TopicsTableSeeder::class);
         $this->call(ThreadsTableSeeder::class);
         $this->call(PostsTableSeeder::class);
    }
}
