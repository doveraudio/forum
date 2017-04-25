<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/**
 *  @var \Illuminate\Database\Eloquent\Factory $factory 
 * 'name','email','password','logged_in','banned'
 * */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'logged_in' => '-1',
        'banned' => '-1',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Index::class, function(Faker\Generator $faker){
    return [
        'title' => $faker->words(5,true),
        'description' => $faker->sentence,
        'created_by'  => 1
    ];
});

$factory->define(App\Forum::class, function (Faker\Generator $faker){
    return [
        'index_id'      => $faker->numberBetween(1,5),
        'created_by'    => $faker->numberBetween(1,50),
        'title'         => $faker->words(5,true),
        'description'   => $faker->paragraph
    ];
});

$factory->define(App\Topic::class, function(Faker\Generator $faker){
return [
    'forum_id'      => $faker->numberBetween(1,25),
    'title'         => $faker->words(5,true),
    'description'   => $faker->paragraph,
    'created_by'    => $faker->numberBetween(1,50)
];
});

$factory->define(App\Thread::class, function(Faker\Generator $faker){
return [
    'topic_id'      => $faker->numberBetween(1,50),
    'title'         => $faker->words(5,true),
    'description'   => $faker->paragraph,
    'created_by'    => $faker->numberBetween(1,50)
];
});

$factory->define(App\Post::class, function(Faker\Generator $faker){
    $thread = $faker->numberBetween(1,50);
return [
    'thread_id'     => $thread,
    'title'         => App\Thread::find($faker->numberBetween(1,50))->title,
    'body'   => $faker->paragraph,
    'has_attachments' => false,
    'created_by'    => $faker->numberBetween(1,50)
];
});


$factory->define(App\Message::class, function(Faker\Generator $faker){
    $sender = $faker->numberBetween(1,50);
    $receiver = $faker->numberBetween(1,50);
    if($sender == $receiver){
    while($sender == $receiver){
        $sender = $faker->numberBetween(1,50);
        $receiver = $faker->numberBetween(1,50);
    }
    }
    //echo App\User::find($receiver);
    return [
        'title'=>$faker->words(5,true),
        'body'=> $faker->paragraph,
        'sender_id'=> $sender,
        'receiver_id'=> $receiver,
        'status_id'=> '0'
    ]


;});

