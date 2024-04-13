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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('company_id');
            $table->integer('subsidiary_id')->nullable();
            $table->string('product_name');
            $table->integer('product_price');
            $table->integer('discount_percent')->nullable();
            $table->char('discounted_price')->nullable();
            $table->text('description');
            $table->text('image')->nullable();
            $table->integer('product_area');
            $table->tinyInteger('statusProduct')->default(0);
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
};
