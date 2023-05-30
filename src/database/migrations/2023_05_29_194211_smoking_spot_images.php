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
        Schema::create('smoking_spot_images', function (Blueprint $table) {
            $table->bigIncrements('image_id');
            $table->unsignedBigInteger('smoking_spot_id')->comment('喫煙所ID');
            $table->string('image_url', 255)->comment('喫煙所画像URL');
            $table->timestamps();

            $table->foreign('smoking_spot_id')
                ->references('smoking_spot_id')
                ->on('smoking_spots')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smoking_spot_images');
    }
};
