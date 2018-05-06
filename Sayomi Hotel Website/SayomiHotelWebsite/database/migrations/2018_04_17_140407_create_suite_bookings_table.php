<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuiteBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suite_bookings', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('suiteID');
            $table->integer('guestID');
            $table->dateTime('bookDate');
            $table->dateTime('beginStayDate');
            $table->integer('nights');
            $table->decimal('price');
            $table->integer('code');      
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
        Schema::dropIfExists('suite_bookings');
    }
}
