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
        Schema::create('url_qualities', function (Blueprint $table) {
            $table->id();
            $table->enum('quality_video', ['144', '240', '360', '480', '720', '1080']);
            $table->string('quality_url');
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
        Schema::dropIfExists('url_qualities');
    }
};
