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
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade')->comment("User Id");
            $table->string('entity_type')->comment('Entity Type');
            $table->integer('entity_id')->unsigned()->comment('Entity Id');
            $table->tinyInteger('rating_value')->default(0)->comment('0:1_star, 1:2_stars, 2:3_stars, 3:4_stars, 4:5_stars');
            $table->timestamps();
            $table->softDeletes()->comment('Deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
