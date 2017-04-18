<?php

use Illuminate\Database\Seeder;

class IndexesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $indexes = factory(App\Index::class, 5)->create();
    }
}
