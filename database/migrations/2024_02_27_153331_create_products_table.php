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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('main_image');
            $table->json('images');
            $table->unsignedInteger('price');
            $table->unsignedInteger('sale_price');
            $table->unsignedInteger('status')->default(0);
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('ward_id');
            $table->string('address', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
