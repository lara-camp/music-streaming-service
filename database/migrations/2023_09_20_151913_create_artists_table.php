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
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->integer('division_id')->unsigned()->comment('Display Id');
            $table->string('display_name')->comment('Display Name');
            $table->string('email')->unique()->comment('Email');
            $table->string('password')->comment('Password');
            $table->string('image_s3_path')->comment('Image Path');
            $table->string('thumbnail_s3_path')->comment('Thumbnail Path');
            $table->string('play_counter')->comment('Play Counter');
            $table->tinyInteger('type')->default(0)->comment('0:normal_user, 1:silver, 2:gold, 3:diamond, 4:platinum');
            $table->timestamps();
            $table->softDeletes()->comment('Deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
