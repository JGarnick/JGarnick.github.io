<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GenericSeeder extends Seeder
{
	private $races = [
		[
			"id" => 1,
			"name" => "Dwarf",
			"speed" => 25,
			"description" => "",
			"age" => 350,
			"size" => "Small",
			"darkvision" => 60
		],
		[
			"id" => 2,
			"name" => "Elf",
			"speed" => 30,
			"description" => "",
			"age" => 750,
			"size" => "Medium",
			"darkvision" => 60
		],
		[
			"id" => 3,
			"name" => "Halfling",
			"speed" => 25,
			"description" => "",
			"age" => 150,
			"size" => "Small",
		],
		[
			"id" => 4,
			"name" => "Human",
			"speed" => 30,
			"description" => "",
			"age" => 80,
			"size" => "Medium"
		],
		[
			"id" => 5,
			"name" => "Dragonborn",
			"speed" => 30,
			"description" => "",
			"age" => 80,
			"size" => "Medium"
		],
		[
			"id" => 6,
			"name" => "Gnome",
			"speed" => 25,
			"description" => "",
			"age" => 500,
			"size" => "Small",
			"darkvision" => 60
		],
		[
			"id" => 7,
			"name" => "Half-Elf",
			"speed" => 30,
			"description" => "",
			"age" => 200,
			"size" => "Medium",
			"darkvision" => 60
		],
		[
			"id" => 8,
			"name" => "Half-Orc",
			"speed" => 30,
			"description" => "",
			"age" => 75,
			"size" => "Medium",
			"darkvision" => 60
		],
		[
			"id" => 9,
			"name" => "Tiefling",
			"speed" => 30,
			"description" => "",
			"age" => 90,
			"size" => "Medium",
			"darkvision" => 60
		],
		[
			"id" => 10,
			"name" => "Aasimar",
			"speed" => 30,
			"description" => "",
			"age" => 160,
			"size" => "Medium",
			"darkvision" => 60
		],
		[
			"id" => 11,
			"name" => "Firbolg",
			"speed" => 30,
			"description" => "",
			"age" => 500,
			"size" => "Medium",
		],
		[
			"id" => 12,
			"name" => "Goliath",
			"speed" => 30,
			"description" => "",
			"age" => 80,
			"size" => "Medium",
		],
		[
			"id" => 13,
			"name" => "Kenku",
			"speed" => 30,
			"description" => "",
			"age" => 60,
			"size" => "Medium",
		],
		[
			"id" => 14,
			"name" => "Lizardfolk",
			"speed" => 30,
			"description" => "",
			"age" => 60,
			"size" => "Medium",
		],
		[
			"id" => 15,
			"name" => "Tabaxi",
			"speed" => 30,
			"description" => "",
			"age" => 80,
			"size" => "Medium",
			"darkvision" => 60
		],
		[
			"id" => 16,
			"name" => "Triton",
			"speed" => 30,
			"description" => "",
			"age" => 200,
			"size" => "Medium",
		],
	];

	private $classes = [
		"Barbarian" => 'd12',
		"Bard" => 'd8',
		"Cleric" => 'd8',
		"Druid" => 'd8',
		"Fighter" => 'd10',
		"Monk" => 'd8',
		"Paladin" => 'd10',
		"Ranger" => 'd10',
		"Rogue" => 'd8',
		"Sorcerer" => 'd6',
		"Warlock" => 'd8',
		"Wizard" => 'd6',
	];

	private $monies = [
		"Copper" => "cp",
		"Silver" => "sp",
		"Electrum" => "ep",
		"Gold" => "gp",
		"Platinum" => "pp",
	];

	private $skills = [
		"Athletics" => "Strength",
		"Acrobatics" => "Dexterity",
		"Sleight of Hand" => "Dexterity",
		"Stealth" => "Dexterity",
		"Arcana" => "Intelligence",
		"History" => "Intelligence",
		"Investigation" => "Intelligence",
		"Nature" => "Intelligence",
		"Religion" => "Intelligence",
		"Animal Handling" => "Wisdom",
		"Insight" => "Wisdom",
		"Medicine" => "Wisdom",
		"Perception" => "Wisdom",
		"Survival" => "Wisdom",
		"Deception" => "Charisma",
		"Intimidation" => "Charisma",
		"Performance" => "Charisma",
		"Persuasion" => "Charisma",
		"Choice" => "Choice"
	];

	private $attributes = [
		"Strength" => "Str",
		"Dexterity" => "Dex",
		"Constitution" => "Con",
		"Wisdom" => "Wis",
		"Intelligence" => "Int",
		"Charisma" => "Cha",
		"Choice" => "Choice"
	];

	private $proficiencies = [
		"Light Armor",
		"Medium Armor",
		"Heavy Armor",
		"Simple Weapons",
		"Martial Weapons",
		"Shields",
	];

	private $subraces = [
		["name" => "Lightfoot", "parent_race_id" => 3],
		["name" => "Stout", "parent_race_id" => 3],
		["name" => "High Elf", "parent_race_id" => 2],
		["name" => "Wood Elf", "parent_race_id" => 2],
		["name" => "Dark Elf (Drow)", "parent_race_id" => 2],
		["name" => "Hill Dwarf", "parent_race_id" => 1],
		["name" => "Mountain Dwarf", "parent_race_id" => 1],
		["name" => "Variant Human", "parent_race_id" => 4],
		["name" => "Forest", "parent_race_id" => 6],
		["name" => "Rock", "parent_race_id" => 6],
	];
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		foreach ($this->proficiencies as $p) {
			DB::table('weapon_armor_types')->insert(["name" => $p]);
		}

		foreach ($this->races as $race) {
			DB::table('races')->insert($race);
		}

		foreach ($this->classes as $class => $hit_die) {
			DB::table('classes')->insert([
				'name' => $class,
				'hit_die' => $hit_die
			]);
		}

		foreach ($this->skills as $skill => $stat) {
			DB::table('skills')->insert([
				"name" => $skill,
				"attribute" => $stat,
			]);
		}

		foreach ($this->monies as $money => $abbr) {
			DB::table('monies')->insert([
				"name" => $money,
				"abbr" => $abbr,
			]);
		}


		foreach ($this->attributes as $attribute => $abbr) {
			DB::table('attributes')->insert([
				'name' => $attribute,
				'abbr' => $abbr,
			]);
		}

		foreach ($this->subraces as $data) {
			DB::table("subraces")->insert($data);
		}
	}
}
