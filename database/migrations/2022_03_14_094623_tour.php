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
            $table->decimal('price',6,2)->nullable();
            $table->integer('duration')->nullable();
            $table->string('departure_point')->nullable();
            $table->datetime('departure_time')->nullable();
            $table->string('overview')->nullable();
            $table->string('img')->nullable();
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
