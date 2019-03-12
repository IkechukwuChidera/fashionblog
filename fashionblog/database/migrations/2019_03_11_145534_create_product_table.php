<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('Image')->nullable();
              $table->string('Price');
              $table->string('Product_name');
              $table->string('Description');
              $table->bigInteger('category_id')->unsigned()->nullabe();


            $table->foreign('category_id')->references('id')
            ->on('category')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('product');
    }
}
