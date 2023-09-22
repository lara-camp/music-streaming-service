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
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('album_id')->references('id')->on('albums')->constrained()->onDelete('cascade')->comment("Album Id");
            $table->integer('admin_id')->unsigned()->comment('Admin Id');
            $table->tinyInteger('publish_type')->default(0)->comment('0:draft, 1:publish, 2:pending');
            $table->string('title')->comment('Title');
            $table->string('duration')->comment('Duration');
            $table->string('image_url')->nullable()->comment('Image Url');
            $table->string('audio_url')->comment('Audio Url');
            $table->string('youtube_url')->nullable()->comment('Youtube Url');
            $table->timestamps();
            $table->softDeletes()->comment('Deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
