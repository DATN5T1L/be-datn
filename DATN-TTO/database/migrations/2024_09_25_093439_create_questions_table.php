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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('content_question');
            $table->enum('type_question', ['multiple_choice', 'fill', 'true_false']);
            $table->unsignedBigInteger('document_id');
            $table->timestamps();
            $table->foreign('document_id')
            ->references('id')
            ->on('documents')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
