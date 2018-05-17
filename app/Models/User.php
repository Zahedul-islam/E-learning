<?php

namespace App\Models;

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
        'name', 'email','contact','designation','address','profile_pic','role','password', 'mobile', 'institution'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasRole($role) {

        if($this->role == $role) {
            return true;
        }

        return false;
    }

    public function questions() {
        return $this->hasMany('App\Models\Question');
    }

    public function answers() {
        return $this->hasMany('App\Models\Answer');
    }
}
