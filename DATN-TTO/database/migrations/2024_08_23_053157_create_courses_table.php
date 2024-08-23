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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name_course', 150);
            $table->text('discription_course');
            $table->string('img_course', 255);
            $table->decimal('price_course', 10, 0)->unsigned();
            $table->enum('status_course', ['Not registerd', 'In progress', 'Completed']);
            $table->boolean('certify_course')->defaultFalse();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
