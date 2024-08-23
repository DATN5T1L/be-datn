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
        Schema::create('url_quality', function (Blueprint $table) {
            $table->id();
            $table->string('quality_video', 10);
            $table->string('quality_url', 255);
            $table->unsignedBigInteger('video_lesson_id');
            $table->timestamps();
            $table->foreign('video_lesson_id')->references('id')->on('video_lessons')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('url_quality');
    }
};
