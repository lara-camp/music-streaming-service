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
            $table->integer('admin_id')->unsigned()->nullable()->comment('Admin Id');
            $table->tinyInteger('publish_type')->default(0)->comment('0:draft, 1:publish, 2:pending');
            $table->string('title')->comment('Title');
            $table->string('duration')->comment('Duration');
            $table->string('language')->nullable()->comment('Language');
            $table->string('bitrate')->nullable()->comment('Bitrate');
            $table->string('image_s3_path')->nullable()->comment('Image Path');
            $table->string('thumbnail_s3_path')->nullable()->comment('Thumbnail Path');
            $table->string('audio_s3_path')->comment('Audio Path');
            $table->integer('likes_count')->unsigned()->nullable()->comment('Play Counter');
            $table->integer('play_counter')->unsigned()->nullable()->comment('Play Counter');
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
