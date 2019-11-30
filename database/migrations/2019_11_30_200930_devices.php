<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Devices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_signin')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('browser_login')->nullable();
            $table->string('browser_version')->nullable();
            $table->string('device_login')->nullable();
            $table->string('device_version')->nullable();
            $table->string('device')->nullable();
            $table->longText('current_location')->nullable();
            $table->longText('language')->nullable();
            $table->string('root')->nullable();
            $table->string('https')->nullable();
            $table->integer('candidate_id')->unsigned();
            $table->foreign('candidate_id')->references('id')->on('candidates');
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
        //
    }
}
