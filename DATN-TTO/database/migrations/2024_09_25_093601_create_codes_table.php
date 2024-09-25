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
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->text('question_code');
            $table->text('answer_code');
            $table->text('toturial_code');
            $table->unsignedBigInteger('exercise_id');
            $table->timestamps();
            $table->foreign('exercise_id')
            ->references('id')
            ->on('exercises')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codes');
    }
};
