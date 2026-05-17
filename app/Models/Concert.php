<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $fillable = [
        'artista',
        'tour',
        'venue',
        'ciudad',
        'fecha',
        'descripcion',
        'spotify_link',
        'foto',
        'rating'
    ];
}