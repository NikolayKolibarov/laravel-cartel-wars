<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('cartel_type_id');
            $table->double('location_x');
            $table->double('location_y');
            $table->integer('level');
            $table->decimal('money');
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
        Schema::dropIfExists('cartels');
    }
}
