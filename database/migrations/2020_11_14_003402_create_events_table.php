<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('org_id');
            $table->timestamp('event_date');
            $table->integer('event_duration_time');
            $table->string('event_title');
            $table->string('event_desc');
            $table->string('event_location')->nullable()->default('');
            $table->string('event_coordinates')->nullable()->default('');
            $table->boolean('is_active');
            $table->foreign('org_id')->references('id')->on('organizations');
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
        Schema::dropIfExists('events');
    }
}
