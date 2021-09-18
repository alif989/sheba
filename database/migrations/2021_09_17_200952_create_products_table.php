<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->integer('available_qty')->nullable();
            $table->integer('total_qty')->nullable();
            $table->integer('sales_qty')->nullable();
            $table->decimal('purchase_price',11,2);
            $table->decimal('sales_price',11,2);
            $table->string('product_img_url',255)->nullable();
            $table->enum('status',['Active','Inactive'])->defult('Active');
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
        Schema::dropIfExists('products');
    }
}
