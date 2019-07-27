<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //see which users are currently matched up
    public function usersLikedFirst(){
        return $this->belongsToMany(User::class, 'user_user', 'user_id_first', 'user_id_second');
    }

    public function usersLikedSecond(){
        return $this->belongsToMany(User::class, 'user_user', 'user_id_second', 'user_id_first');
    }

    public function groups(){
        return $this->belongsToMany(Group::class);
    }
}
