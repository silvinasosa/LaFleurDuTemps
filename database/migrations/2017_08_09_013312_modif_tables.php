<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('users', function (Blueprint $table) {
              $table->boolean('cliente')->default(1);
              $table->boolean('admin')->default(0);
             });

           Schema::table('images', function (Blueprint $table) {
              $table->dropColumn('name');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('cliente');
          $table->dropColumn('admin');
      });

      Schema::table('images', function (Blueprint $table) {
         $table->string('name')->after('id');
       });

    }
}
