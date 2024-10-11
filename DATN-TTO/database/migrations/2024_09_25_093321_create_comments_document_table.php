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
        Schema::create('comments_document', function (Blueprint $table) {
            $table->id();
            $table->string('comment_title');
            $table->text('comment_text');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('document_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('comment_to')->nullable();
            $table->timestamps();
            $table->foreign('document_id')
                ->references('id')
                ->on('documents')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
                
            $table->foreign('comment_to')
                ->references('id')
                ->on('comments_document')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments_document');
    }
};
