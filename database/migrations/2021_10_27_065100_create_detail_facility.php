<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailFacility extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DetailFacility', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('facility_id');
            $table->foreign('facility_id')->references('facility_id')->on('facility');
            $table->string('FacilityDesc');
            $table->integer('FacilityKuota')->nullable();
            $table->Biginteger('FacilityPrice');
            $table->string('Slot')->nullable();
            $table->date('Date');
            $table->time('Time_Start');
            $table->time('Time_End');
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
    }
}
