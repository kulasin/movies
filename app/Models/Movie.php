<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{
    protected $fillable = ['title', 'description', 'genre', 'rating'];



    protected static function boot()
    {
        parent::boot();

        static::creating(function ($movie) {
            $movie->slug = Str::slug($movie->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

