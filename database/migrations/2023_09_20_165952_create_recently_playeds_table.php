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
        Schema::create('recently_playeds', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade')->comment("User Id");
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
        Schema::dropIfExists('recently_playeds');
    }
};
