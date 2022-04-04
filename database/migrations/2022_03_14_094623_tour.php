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
        Schema::create('Tour', function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->decimal('price',10,2)->nullable();
            $table->integer('duration')->nullable();
            $table->integer('departure_point')->unsigned()->nullable();
            $table->date('departure_date')->nullable();
            $table->string('overview')->nullable();
            $table->string('img')->nullable();
            $table->integer('sales')->default(0);
            $table->string('video')->nullable();
            $table->string('description')->nullable();
            $table->integer('rate')->default(3);
            $table->foreign('departure_point')->references('id')->on('Province');
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
        Schema::dropIfExists('Tour');
    }
};
