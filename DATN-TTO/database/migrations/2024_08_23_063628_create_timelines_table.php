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
        Schema::create('timelines', function (Blueprint $table) {
            $table->id();
            $table->date('day_of_week')->nullable();
            $table->time('time')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('enrollment_id');
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('restrict');
            $table->foreign('enrollment_id')->references('id')->on('enrollments')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timelines');
    }
};
