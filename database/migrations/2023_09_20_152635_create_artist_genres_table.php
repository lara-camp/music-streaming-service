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
        Schema::create('artist_genres', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('artist_id')->references('id')->on('artists')->constrained()->onDelete('cascade')->comment("Artist Id");
            $table->foreignId('genre_id')->references('id')->on('genres')->constrained()->onDelete('cascade')->comment("Genre Id");
            $table->timestamps();
            $table->softDeletes()->comment('Deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_genres');
    }
};
