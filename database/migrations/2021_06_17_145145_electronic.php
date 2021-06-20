<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Electronic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::connection('mysql2')->create('electronic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('brand');
            $table->string('condition');
            $table->string('price');
            $table->longText('description');
            $table->string('image');
            $table->string('location');
            $table->integer('owner');
            $table->unsignedInteger('categories');
            $table->foreign('categories')->references('id')->on('categories');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
