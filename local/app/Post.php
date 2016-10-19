<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable =  ['title', 'description'];


    public function sections()
    {
        return $this->belongsToMany('App\Section');
    }
}
