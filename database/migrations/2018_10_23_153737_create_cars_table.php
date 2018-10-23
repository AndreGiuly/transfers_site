<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('make');
            $table->string('model');
            $table->integer('fuel_id');
            $table->integer('passengers');
            $table->integer('suitability');
            $table->string('photo');
            $table->integer('premium')->default(0)->unsigned();
            $table->integer('porter_service')->default(0)->unsigned();
            $table->float('minimum_rate')->unsigned();
            $table->float('km_price')->unsigned();
            $table->timestamps();

            //$table->foreign('fuel_id')->references('id')->on('fuels');
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
