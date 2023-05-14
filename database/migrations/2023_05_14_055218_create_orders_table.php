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
        Schema::create('orders', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'order2user'
            );
            $table->foreignId('product_id')->constrained(
                table: 'products', indexName: 'order2product'
            );
            $table->integer('quantity');
            $table->foreignId('payment_id')->constrained(
                table: 'payments', indexName: 'order2payment'
            );
            $table->timestamps();
            $table->primary(['user_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
