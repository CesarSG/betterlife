<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnFkDetDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('det_donations', function (Blueprint $table) {
          $table->integer('cause_id')->unsigned();
          $table->foreign('cause_id')->references('id')->on('causes');

          $table->integer('donation_id')->unsigned();
          $table->foreign('donation_id')->references('id')->on('donations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('det_donations', function (Blueprint $table) {
            //
        });
    }
}
