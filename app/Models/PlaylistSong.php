<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlaylistSong extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'playlist_id',
        'song_id'
    ];
}
