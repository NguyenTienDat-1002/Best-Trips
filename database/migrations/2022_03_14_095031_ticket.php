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
        Schema::create('Ticket', function(Blueprint $table){
            $table->increments('id');
            $table->integer('booking_id')->unsigned();
            $table->boolean('ticket_type');
            $table->foreign('booking_id')->references('id')->on('Booking');
            $table->foreign('ticket_type')->references('type')->on('Ticket_Type');
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
        Schema::dropIfExists('Ticket');
    }
};
