<?php

use Illuminate\Database\Seeder;
use App\User as User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Resource Properties:
     * 'name','email','password','logged_in','banned'
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => "admin",
            'email' => "admin@admin.com",
            'password' => bcrypt("admin"),
            'logged_in' => '-1',
            'banned' => '-1'
        ]);

        
        $users = factory(App\User::class, 50)->create();
    }
}
