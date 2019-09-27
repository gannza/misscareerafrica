<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->string('level_education')->nullable();
            $table->string('former_school_attended')->nullable();
            $table->string('education_background')->nullable();
            $table->string('current_occupation')->nullable();
            $table->longText('q1')->nullable();
            $table->longText('q2')->nullable();
            $table->longText('q3')->nullable();
            $table->longText('q4')->nullable();
            $table->longText('q5')->nullable();
            $table->longText('q6')->nullable();
            $table->longText('q7')->nullable();
            $table->integer('session_id')->unsigned();
            $table->integer('votes')->nullable();
            $table->integer('is_selected')->nullable();
            $table->timestamps();
            $table->foreign('session_id')->references('id')->on('sessions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('candidates');
    }
}
