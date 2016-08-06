<?php

namespace App;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'profilepic', 'briefdescription', 'address', 'gitlink', 'fblink', 'twitlink', 'lilink', 'languages', 'about', 'interests',   
    ];

    public function education() {
        return $this->hasMany('Educatn');
    }

    public function workexp() {
        return $this->hasMany('Experience');
    }

    public function volwork() {
        return $this->hasMany('VolunteerWork');
    }
    
    public function user() {
        return $this->belongsTo('User'); // this matches the Eloquent model
    }

}