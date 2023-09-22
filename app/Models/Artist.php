<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'division_id',
        'display_name',
        'biography',
        'image_url'
    ];

    public function genres() {
        return $this->belongsToMany(Genre::class, 'artist_genres');
    }

    public function albums() {
        return $this->hasMany(Album::class);
    }
}
