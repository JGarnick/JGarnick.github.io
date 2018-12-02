<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassProficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_proficiencies', function (Blueprint $table) {
            $table->increments('id');
			$table->string("type");
			$table->string("class_id")->nullable();
			$table->string("attribute_id")->nullable();
			$table->string("starting_skills")->nullable();
			$table->string("num_skills_granted")->nullable();
			$table->string("weapon_id")->nullable();
			$table->string("armor_id")->nullable();
			$table->string("tool_id")->nullable();
			$table->string("weapon_armor_type_id")->nullable();
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
        Schema::dropIfExists('class_proficiencies');
    }
}
