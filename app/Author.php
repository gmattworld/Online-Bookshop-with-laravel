<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*
     * Image Accessor
     */
    public function getImageUrlAttribute($value)
    {
        return asset('/').'public/assets/img/'.$this->image->file;
    }
    public function getDefaultImgAttribute($value)
    {
        return asset('/').'public/assets/img/'.'user-placeholder.png';
    }
}
