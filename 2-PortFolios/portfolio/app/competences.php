<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class competences extends Model
{
     protected $fillable = [
        'parcours', 'techniques','qualites'
    ];
}

