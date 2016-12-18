<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartelArmyUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartel_army_units', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cartel_id');
            $table->integer('army_unit_id');
            $table->double('health');
            $table->double('attack');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartel_army_units');
    }
}
