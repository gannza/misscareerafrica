<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();;
            $table->string('session')->nullable();;
            $table->string('country')->nullable();;
            $table->string('date')->nullable();;
            $table->string('image')->nullable();
            $table->integer('numbering')->nullable();;
            $table->boolean('is_current_applying')->nullable();;
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
        Schema::drop('sessions');
    }
}
