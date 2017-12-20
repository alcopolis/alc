<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'days', 'hours', 'company_id', 'project_id', 'user_id'
    ];



    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function project(){
        return $this->hasMany('App\Models\Project');
    }

    public function company(){
        return $this->hasMany('App\Models\Company');
    }


    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

}
