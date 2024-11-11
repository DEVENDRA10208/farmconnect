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
        Schema::create('tbl_produce', function (Blueprint $table) {
            $table->id();
            $table->string('produce_name');
            $table->text('produce_desc');
            $table->integer('produce_price_per_kg');
            $table->string('produce_certification');
            $table->string('produce_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_produce');
    }
};
