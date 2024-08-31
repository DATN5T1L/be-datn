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
            $table->string('password', 25);
            $table->string('fullname', 150);
            $table->tinyInteger('age')->nullable()->unsigned();
            $table->string('email', 200)->unique();
            $table->string('phonenumber', 10)->unique();
            $table->string('avatar', 255)->nullable();
            $table->enum('role', ['admin', 'instructor', 'student'])->default('student');
            $table->enum('status', ['online', 'offline', 'baned']);
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
