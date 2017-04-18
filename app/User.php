<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Provides the profile data of the user
     *
     * @return App\User
     */
    public function Profile(){

        return $this->hasOne('App\Profile');

    }
    /**
     * Provides a collection of App\Image
     *
     * @return Collection
     */
    public function Images(){

        return $this->hasMany('App\Image');

    }
    /**
     * Provides a collection of App\Upload
     *
     * @return Collection
     */
    public function Uploads(){

        return $this->hasMany('App\Upload');

    }
    /**
     * Provides a collection of App\Index
     *
     * @return Collection
     */
    public function Indexes(){

        return $this->hasMany('App\Index');
        
    }
/**
     * Provides a collection of App\Forum
     *
     * @return Collection
     */
    public function Forums(){

        return $this->hasMany('App\Forum');

    }
/**
     * Provides a collection of App\Topic
     *
     * @return Collection
     */
    public function Topics(){

        return $this->hasMany('App\Topic');

    }
    /**
     * Provides a collection of App\Thread
     *
     * @return Collection
     */
    public function Threads(){

        return $this->hasMany('App\Threads');

    }
    /**
     * Provides a collection of App\Post
     *
     * @return Collection
     */
    public function Posts()
    {

        return $this->hasMany('App\Post', 'created_by', 'id');

    }
    /**
     * Provides a collection of App\Message
     *
     * @return Collection
     */
    public function Message()
    {

        return $this->hasMany('App\Message');

    }

        


}
