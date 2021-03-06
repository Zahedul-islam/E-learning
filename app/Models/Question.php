<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user() {
    	return $this->belongsTo('App\Models\User');
    }

    public function answers() {
    	return $this->hasMany('App\Models\Answer');
    }
}
