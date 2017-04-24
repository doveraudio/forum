<?php

use Illuminate\Database\Seeder;

class MessageStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\MessageStatus::create(['value'=>'unread']);
        App\MessageStatus::create(['value'=>'read']);
        App\MessageStatus::create(['value'=>'deleted']);
    

    }
}
