<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use HasFactory, SoftDeletes;

    public function albums() {
        return $this->belongsTo(Album::class);
    }

    public function playlists() {
        return $this->belongsToMany(Playlist::class, 'playlist_songs');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'favourites', 'recently_playeds');
    }
}
