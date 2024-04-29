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
        // 多對多關係需額外建表，並將兩方鍵值帶入
        // order 為弱實體，須將組合後的值帶入作為 Primary key
        Schema::create('items_orders', function (Blueprint $table) {
            $table->integer('include_item_id')->unsigned();
            $table->integer('include_user_id')->unsigned();
            $table->integer('include_order_id')->unsigned();
            $table->index(['include_user_id', 'include_order_id']);     // 組成複合鍵，用來找訂單
            $table->foreign('include_item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('include_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('include_order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_orders');
    }
};
