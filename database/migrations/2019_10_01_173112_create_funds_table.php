<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFundsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone_number');
            $table->longText('background');
            $table->longText('financial_status');
            $table->longText('career_background');
            $table->string('attachement');
            $table->longText('why_give_capital');
            $table->longText('how_capital_transform_life');
            $table->longText('how_will_you_make_profit');
            $table->longText('comptentitive_advantage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funds');
    }
}
