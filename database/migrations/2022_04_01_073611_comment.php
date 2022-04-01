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
        Schema::create('Comment', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('tour_id')->unsigned();
            $table->string('content')->nullable();
            $table->integer('rate')->unsinged()->default(0);
            $table->datetime('time');
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
        Schema::dropIfExists('Comment');
    }
};
