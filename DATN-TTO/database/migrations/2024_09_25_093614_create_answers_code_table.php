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
        Schema::create('answers_code', function (Blueprint $table) {
            $table->id();
            $table->text('correct_answer');
            $table->unsignedBigInteger('code_id');
            $table->timestamps();
            $table->foreign('code_id')
            ->references('id')
            ->on('codes')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers_code');
    }
};
