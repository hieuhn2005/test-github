<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->timestamp('order_date');
            $table->decimal('total_amount', 10, 2);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
