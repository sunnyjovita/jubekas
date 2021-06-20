<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clothes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         // create the table
        Schema::connection('mysql2')->create('clothes', function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('condition');
            $table->string('price');
            $table->longText('description');
            $table->string('location');
            $table->string('image'); 
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
