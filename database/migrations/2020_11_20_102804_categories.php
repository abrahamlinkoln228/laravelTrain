<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->unsignedBigInteger('idParent')->nullable();
            $table->foreign('idParent')->references('id')->on('categorie');
        });

        Schema::create('good', function(Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('price')->unsigned();
            $table->unsignedBigInteger('idCategory');
            $table->foreign('idCategory')->references('id')->on('categorie');

        });

        Schema::create('image', function(Blueprint $table) {
            $table->id();
            $table->string('path')->unique();
            $table->integer('size')->unsigned();
            $table->integer('height')->unsigned();
            $table->integer('width')->unsigned();
        });


        Schema::create('images2goods', function(Blueprint $t) {
            $t->unsignedBigInteger('idImage');
            $t->unsignedBigInteger('idGood');
            $t->foreign('idImage')->references('id')->on('image');
            $t->foreign('idGood')->references('id')->on('good');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorie');
        Schema::dropIfExists('good');
        Schema::dropIfExists('image');
        Schema::dropIfExists('images2goods');
    }
}
