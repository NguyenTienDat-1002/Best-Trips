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
        Schema::create('Tour_Highlight', function (Blueprint $table){
            $table->increments('id');
            $table->integer('tour_id')->unsigned();
            $table->string('highlight')->nullable();
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
        Schema::dropIfExists('Tour_Highlight');
    }
};
