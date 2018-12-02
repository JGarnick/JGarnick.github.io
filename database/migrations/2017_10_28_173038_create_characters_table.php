<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ac');
            $table->integer('hp_max');
            $table->integer('hp_current');
            $table->integer('initiative');
            $table->string('name');
            $table->string('player_name');
            $table->integer('background_id');
            $table->integer('race_id');
            $table->integer('subrace_id');
            //$table->integer('strength');
            //$table->integer('dexterity');
            //$table->integer('constitution');
            //$table->integer('wisdom');
            //$table->integer('intelligence');
            //$table->integer('charisma');
            $table->integer('class_id')->unsigned();
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
        Schema::dropIfExists('characters');
    }
}
