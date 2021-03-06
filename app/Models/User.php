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
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];





    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function companies(){
        return $this->hasMany('App\Models\Company');
    }




    public function tasks(){
        return $this->belongsToMany('App\Models\Task');
    }

    public function projects(){
        return $this->belongsToMany('App\Models\Project');
    }
}
