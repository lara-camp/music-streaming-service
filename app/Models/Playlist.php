<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Playlist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'user_id',
        'title'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function songs() {
        return $this->belongsToMany(Song::class, 'playlist_songs');
    }
}
