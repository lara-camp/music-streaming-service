<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'artist_id',
        'title',
        'release_date',
        'image_s3_path',
        'thumbnail_s3_path',
        'play_counter'
    ];

    public function artists() {
        return $this->belongsTo(Artist::class);
    }

    public function songs() {
        return $this->hasMany(Song::class);
    }
}
