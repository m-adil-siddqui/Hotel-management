<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('reservation_id');
            // $table->string('title');
            // $table->string('fname');
            // $table->string('lname');
            //$table->string('type_room');
            //$table->string('type_bed');
            //$table->integer('num_rooms');
            //$table->integer('cin');
            //$table->integer('cout');
            $table->integer('room_price');
            //$table->string('meal');
            $table->integer('meal_price');
            $table->integer('bed_price');
            $table->integer('total_price');
           // $table->integer('num_days');
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
        Schema::dropIfExists('payments');
    }
}
