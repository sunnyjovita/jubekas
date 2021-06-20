<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Property extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::connection('mysql2')->create('property', function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('landSize');
            $table->string('buildingSize');
            $table->string('address');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('year');
            $table->string('certificate');
            $table->string('location');
            $table->longText('description');
            $table->string('price');
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
