<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date_begin');
            $table->date('date_final');
            $table->string('location');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('cause_event', function (Blueprint $table) {
            $table->unsignedInteger('cause_id');
            $table->unsignedInteger('event_id');
            $table->foreign('cause_id')
                ->references('id')
                ->on('causes')
                ->onDelete('cascade');
            $table->foreign('event_id')
                ->references('id')
                ->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cause_event');
        Schema::dropIfExists('events');
    }
}
