<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('LastName')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Age')->nullable();
            $table->string('City')->nullable();
            $table->string('State')->nullable();
            $table->string('Country')->nullable();
            $table->string('MarvelCharacter')->nullable();
            $table->string('MarvelComic')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('information');
    }
}
