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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 150);
            $table->string('password');
            $table->string('fullname', 150);
            $table->tinyInteger('age')->unsigned()->nullable();
            $table->string('email')->unique();
            $table->string('phonenumber', 10)->nullable();
            $table->unsignedBigInteger('balance')->default(0);
            $table->string('PIN')->nullable();
            $table->string('avatar')->nullable();
            $table->enum('status_provider', ['Google', 'Facebook'])->nullable();
            $table->string('provider_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
