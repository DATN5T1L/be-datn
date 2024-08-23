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
        Schema::create('messenger_status', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('messenger_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('messenger_id')->references('id')->on('messengers')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messenger_status');
    }
};
