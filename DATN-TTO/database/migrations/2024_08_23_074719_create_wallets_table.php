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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->decimal('balance', 10, 0)->unsigned();
            $table->string('name_bank', 100)->nullable();
            $table->string('bank_account_number', 20)->nullable();
            $table->string('bank_account_holder_name', 40)->nullable();
            $table->string('PIN', 6);
            $table->unsignedBigInteger('user_id'); 
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
