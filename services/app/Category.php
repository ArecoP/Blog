<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name'];

    public function articles() //para las relaciones (nombre plural de modelo)
    {

    	return $this->hasMany('App\Article');
    }

}
