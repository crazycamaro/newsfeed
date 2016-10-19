<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['facebook', 'twitter', 'flickr', 'pinterest', 'googleplus', 'vimeo','youtube','mail'];
}