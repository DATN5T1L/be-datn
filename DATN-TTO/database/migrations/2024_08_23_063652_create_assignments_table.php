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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->text('discription_assignment')->nullable();
            $table->string('name_assignment', 100);
            $table->longText('content_assignment')->nullable();
            $table->string('A, 150')->nullable();
            $table->string('B, 150')->nullable();
            $table->string('C, 150')->nullable();
            $table->string('D, 150')->nullable();
            $table->enum('type_assignment', ['Quiz', 'Coding', 'Resource']);
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('course_id');
            $table->timestamps();
            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
