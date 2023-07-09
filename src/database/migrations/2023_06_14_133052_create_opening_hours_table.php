<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('opening_hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('smoking_spot_id');
            $table->foreign('smoking_spot_id')->references('smoking_spot_id')->on('smoking_spots')->onDelete('cascade');
            $table->string('day_of_week');
            $table->time('opening_time');
            $table->time('closing_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opening_hours');
    }
};
