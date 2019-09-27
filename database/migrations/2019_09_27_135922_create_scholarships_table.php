<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScholarshipsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->date('birth_date');
            $table->string('phone_code');
            $table->string('phone_number');
            $table->string('residence');
            $table->string('gender');
            $table->string('nationality');
            $table->string('national_ID_or_Passport_ID');
            $table->string('parents_or_guardian_name');
            $table->string('parents_guardian_contacts');
            $table->longText('q1');
            $table->longText('q2');
            $table->longText('q3');
            $table->longText('q4');
            $table->boolean('i_agree');
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
        Schema::drop('scholarships');
    }
}
