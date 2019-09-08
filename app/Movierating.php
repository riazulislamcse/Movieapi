<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movierating extends Model
{
    protected $fillable=[
        'headline',
        'description',
        'movie_id',
        'rating'
    ];
}
