<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArtistGenre extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'artist_genre';

    protected $fillable = [ 
        'artist_id',
        'genre_id'
    ];
}
