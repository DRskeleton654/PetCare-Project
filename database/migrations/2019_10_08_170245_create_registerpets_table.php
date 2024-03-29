<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterpetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerpets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('pet_name');
            $table->string('species');
            $table->string('breed');
            $table ->string('gender');
            $table->string('size');
            $table->integer('microchip_number');
            $table->integer('rabies_number');
            $table->string('additional_notes');   
            $table->string('email');
            $table->string('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registerpets');
    }
}
