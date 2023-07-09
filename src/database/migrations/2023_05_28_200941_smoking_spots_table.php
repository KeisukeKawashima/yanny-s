<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('smoking_spots', function (Blueprint $table) {
            $table->bigIncrements('smoking_spot_id');
            $table->string('name', 50)->comment('喫煙所名');
            $table->text('description')->comment('喫煙所の詳細情報');
            $table->decimal('latitude', 8, 6)->comment('緯度');
            $table->decimal('longitude', 9, 6)->comment('経度');
            $table->boolean('roofed')->comment('屋根の有無');
            $table->boolean('has_bench')->comment('ベンチの有無');
            $table->boolean('electronic_cigarette_allowed')->comment('電子タバコ');
            $table->boolean('cigarette_allowed')->comment('紙タバコ');
            $table->boolean('walled')->comment('壁の有無');
            $table->enum('type', ['outdoor', 'indoor', 'cafe', 'restaurant', 'general_smoking_area'])->comment('喫煙所の種類');
            $table->timestamps();
            $table->index(['latitude', 'longitude']); // 複合インデックス
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smoking_spots');
    }
};
