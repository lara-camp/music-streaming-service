<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'display_name',
        'email',
        'password',
        'image_s3_path',
        'thumbnail_s3_path',
        'play_counter',
        'type'
    ];

    public function genres() {
        return $this->belongsToMany(Genre::class, 'artist_genre');
    }

    public function albums() {
        return $this->hasMany(Album::class);
    }
}
