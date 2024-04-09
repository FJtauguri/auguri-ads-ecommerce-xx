<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_lists', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('product_price');
            $table->integer('product_qrcode');
            $table->integer('product_remaining');
            $table->integer('product_stock');
            $table->string('product_status');
            $table->string('product_description');
            $table->longText('product_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_lists');
    }
};
