<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->text('name', 255);
          $table->text('description');
          $table->text('slug', 255);
          $table->float('price');
          $table->timestamps();
          $table->integer('user_id')->unsigned();
          $table->integer('category_id')->unsigned();
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
