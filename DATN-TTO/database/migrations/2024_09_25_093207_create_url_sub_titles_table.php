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
        Schema::create('url_sub_titles', function (Blueprint $table) {
            $table->id();
            $table->enum('sub_title_video', ['Vietnamese', 'English', 'Chinese', 'Japanese', 'Russian']);
            $table->string('sub_title_url');
            $table->unsignedBigInteger('lesson_id');
            $table->timestamps();
            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('url_sub_titles');
    }
};
