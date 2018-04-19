<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('d_id')->unsigned();
            $table->foreign('d_id')->references('id')->on('users');
            $table->string('name');
            $table->string('email')->unique();
            $table->foreign('email')->references('email')->on('users');
            $table->string('contact');
            $table->string('address')->nullable();
            $table->string('PAN')->nullable();
            $table->string('license')->nullable();
            $table->date('contract')->nullable();
            //$table->string('current_location')->nullable();
            $table->string('approx_location')->nullable();
            $table->integer('availability_flag')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
