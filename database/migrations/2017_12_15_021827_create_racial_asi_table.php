<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacialASITable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racial_asi', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('race_id')->nullable();
			$table->integer('subrace_id')->nullable();
			$table->integer('attribute_id');
			$table->integer('amount');
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
        Schema::dropIfExists('racial_bonuses');
    }
}
