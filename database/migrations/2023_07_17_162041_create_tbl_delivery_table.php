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
        Schema::create('tbl_delivery', function (Blueprint $table) {
            $table->id();
            $table->text('produce_name');
            $table->text('pickup_location');
            $table->integer('delivery_quantity');
            $table->string('delivery_truck');
            $table->string('payment_transaction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_delivery');
    }
};
