<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('u_id')->unsigned();
            $table->foreign('u_id')->references('id')->on('users');
            $table->string('u_email');
            $table->foreign('u_email')->references('email')->on('users');
            $table->integer('d_id')->unsigned()->nullable();
            $table->foreign('d_id')->references('id')->on('users');
            //$table->string('d_email')->unique()->nullable();
            //$table->foreign('d_email')->references('email')->on('users');
            $table->string('pickup_loc_lat');
            $table->string('pickup_loc_long');
            $table->string('drop_loc_lat');
            $table->string('drop_loc_long');
            $table->time('pickup_time')->nullable();
            $table->time('drop_time')->nullable();
            $table->integer('status_flag')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }

}
