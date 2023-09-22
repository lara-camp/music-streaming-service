<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('playlist_songs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('playlist_id')->references('id')->on('playlists')->constrained()->onDelete('cascade')->comment("Playlist Id");
            $table->foreignId('song_id')->references('id')->on('songs')->constrained()->onDelete('cascade')->comment("Song Id");
            $table->timestamps();
            $table->softDeletes()->comment('Deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlist_songs');
    }
};
