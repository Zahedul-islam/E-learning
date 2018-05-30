<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static $rules = ['name' => 'required'];

    public function contents() {
    	$this->hasMany('App\Models\Content');
    }
}
