<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaction', function (Blueprint $table) {
            $table->bigIncrements('detailtransaction_id');
            $table->unsignedBigInteger('facility_id');
            $table->foreign('facility_id')->references('facility_id')->on('facility');
            $table->unsignedBigInteger('detailfacility_id');
            $table->foreign('detailfacility_id')->references('id')->on('detailfacility');
            $table->unsignedBigInteger('booking_id');
            $table->foreign('booking_id')->references('booking_id')->on('booking');
            $table->date('BookingDate');
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
        Schema::dropIfExists('_detail_transaction');
    }
}
