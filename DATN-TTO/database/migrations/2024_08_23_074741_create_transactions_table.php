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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('transactions_type', ['Payment', 'Refund', 'Deposit', 'Withdrawal']);
            $table->decimal('amount', 10, 0)->unsigned();
            $table->enum('payment_method', ['Banking', 'Momo', 'VNPAY', 'ZALOPAY'])->nullable();
            $table->enum('status', ['Comleted', 'Processing', 'Failed']);
            $table->string('payment_description', 200)->nullable();
            $table->unsignedBigInteger('enrollment_id');
            $table->unsignedBigInteger('wallet_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('enrollment_id')->references('id')->on('enrollments')->onDelete('cascade');
            $table->foreign('wallet_id')->references('id')->on('wallets')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
