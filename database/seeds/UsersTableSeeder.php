<?php

use Illuminate\Database\Seeder;
use App\User as User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => "admin",
            'email' => "admin@admin.com",
            'password' => bcrypt("admin"),
        ]);
    }
}
