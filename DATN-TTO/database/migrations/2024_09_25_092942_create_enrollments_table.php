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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('rating_course')->nullable();
            $table->text('feedback_text')->nullable();
            $table->enum('status_course', ['completed', 'in_progress', 'failed']);
            $table->string('certificate_course')->nullable();
            $table->boolean('enroll')->default(0);
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('module_id')
                ->references('id')
                ->on('modules')
                ->onDelete('restrict');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
