<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Artist extends Model
{
    use HasFactory,HasApiTokens, SoftDeletes;

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

        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password',
        'remember_token',
    ];

    public function genres() {
        return $this->belongsToMany(Genre::class, 'artist_genre');
    }

    public function albums() {
        return $this->hasMany(Album::class);
    }
}
