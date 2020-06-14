<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name', 'example', 'author'];
    
    /**
    * Get the author that owns the recipe
    */
    public function author()
    {
        return $this->belongsTo('App\User', 'author');
    }
}
