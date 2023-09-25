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
        Schema::create('follows', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade')->comment("User Id");
            $table->foreignId('artist_id')->references('id')->on('artists')->constrained()->onDelete('cascade')->comment("Artist Id");
            $table->tinyInteger('follow_type')->default(0)->comment('0:follow, 1:seefirst');
            $table->timestamps();
            $table->softDeletes()->comment('Deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};
