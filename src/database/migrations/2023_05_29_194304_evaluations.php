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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->bigIncrements('evaluations_id');
            $table->unsignedBigInteger('smoking_spot_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('rating')->comment('評価');
            $table->timestamps(); // created_at and updated_at columns

            // 外部キー制約
            $table->foreign('smoking_spot_id')->references('smoking_spot_id')->on('smoking_spots')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');

            // インデックス
            $table->index('smoking_spot_id');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
