<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::connection('mysql2')->create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('brand');
            $table->string('year');
            $table->string('distance');
            $table->enum('condition',['new', 'used']);
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
        Schema::dropIfExists('cars');
    }
}
