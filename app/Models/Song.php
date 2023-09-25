<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'album_id',
        'admin_id',
        'publish_type',
        'title',
        'duration',
        'language',
        'bitrate',
        'image_s3_path',
        'thumbnail_s3_path',
        'audio_s3_path',
        'likes_count',
        'play_counter',
        'youtube_url'
    ];

    public function albums() {
        return $this->belongsTo(Album::class);
    }

    public function playlists() {
        return $this->belongsToMany(Playlist::class, 'playlist_song');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'favourites', 'recently_playeds');
    }
}
