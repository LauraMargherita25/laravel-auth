<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $fillable = ['title', 'content', 'slug'];

    static public function generateSlug($originalStr) {
        $baseSlug = Str::slug($originalStr);
        $slug = $baseSlug;
        $_i = 1;

        while(self::where('slug', $slug)->first()) {
            $slug = "$baseSlug-$_i";
            $_i++;
        }
        return $slug;
    }

    // public function posts() {
    //     return $this->belongsTo('App\User');
    // }
}
