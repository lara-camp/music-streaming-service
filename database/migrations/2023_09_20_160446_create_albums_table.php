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
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('artist_id')->references('id')->on('artists')->constrained()->onDelete('cascade')->comment("Artist Id");
            $table->string('title')->comment('Title');
            $table->timestamp('release_date')->nullable()->comment('Release Date');
            $table->string('image_url')->nullable()->comment('Image Url');
            $table->timestamps();
            $table->softDeletes()->comment('Deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
