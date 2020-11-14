<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('org_id');
            $table->string('address_line_one');
            $table->string('address_line_two')->nullable()->default('');
            $table->string('address_line_three')->nullable()->default('');
            $table->string('zip_code');
            $table->string('zip_code_plus')->nullable()->default('');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->boolean('is_postal');
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
        Schema::dropIfExists('addresses');
    }
}
