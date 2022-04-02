<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Booking', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('tour_id')->unsigned();
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->integer('adults')->unsigned();
            $table->integer('children')->unsigned();
            $table->decimal('price',10,2)->nullable();
            $table->foreign('user_id')->references('id')->on('User');
            $table->foreign('tour_id')->references('id')->on('Tour');
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
        Schema::dropIfExists('Booking');
    }
};
