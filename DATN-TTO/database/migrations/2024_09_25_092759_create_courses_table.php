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
            $table->string('img_course');
            $table->unsignedBigInteger('price_course');
            $table->unsignedBigInteger('discount_price_course')->nullable();
            $table->enum('status_course', ['active', 'inactive', 'archived']);
            $table->unsignedInteger('views_course');
            $table->float('rating_course', 5, 2);
            $table->tinyInteger('num_lesson');
            $table->decimal('tax_rate', 2, 0, 1);
            $table->boolean('del_flag')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
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
        Schema::dropIfExists('courses');
    }
};
