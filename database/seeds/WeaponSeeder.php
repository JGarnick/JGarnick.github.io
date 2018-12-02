<?php

use Illuminate\Database\Seeder;
use App\Models\Weapon;

class WeaponSeeder extends Seeder
{
	private $weapons = [
		 "types"	=> [
			 "simple melee weapon"	=> [
				[
					"name"			=> "Club",
					"damage"		=> "1d4",
					"cost"			=> "1 sp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "bludgeoning",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Dagger",
					"damage"		=> "1d4",
					"cost"			=> "1 gp",
					"weight"		=> "1 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Greatclub",
					"damage"		=> "1d8",
					"cost"			=> "2 sp",
					"weight"		=> "10 lb.",
					"dmg_type"		=> "bludgeoning",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Handaxe",
					"damage"		=> "1d6",
					"cost"			=> "5 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Javeline",
					"damage"		=> "1d6",
					"cost"			=> "5 sp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Light Hammer",
					"damage"		=> "1d4",
					"cost"			=> "2 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "bludgeoning",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Mace",
					"damage"		=> "1d6",
					"cost"			=> "5 gp",
					"weight"		=> "4 lb.",
					"dmg_type"		=> "bludgeoning",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Quarterstaff",
					"damage"		=> "1d6",
					"cost"			=> "2 sp",
					"weight"		=> "4 lb.",
					"dmg_type"		=> "bludgeoning",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Sickle",
					"damage"		=> "1d4",
					"cost"			=> "1 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Spear",
					"damage"		=> "1d6",
					"cost"			=> "1 gp",
					"weight"		=> "3 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Unarmed Strike",
					"damage"		=> "1",
					"cost"			=> "--",
					"weight"		=> "--",
					"dmg_type"		=> "bludgeoning",
					"weapon_type"	=> "",
				],
			],
			"martial melee weapon"	=> [
				[
					"name"			=> "Battleaxe",
					"damage"		=> "1d8",
					"cost"			=> "10 gp",
					"weight"		=> "4 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Flail",
					"damage"		=> "1d8",
					"cost"			=> "10 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "bludgeoning",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Glaive",
					"damage"		=> "1d10",
					"cost"			=> "20 gp",
					"weight"		=> "6 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Greataxe",
					"damage"		=> "1d12",
					"cost"			=> "30 gp",
					"weight"		=> "7 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Greatsword",
					"damage"		=> "2d6",
					"cost"			=> "50 gp",
					"weight"		=> "6 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Halberd",
					"damage"		=> "1d10",
					"cost"			=> "20 gp",
					"weight"		=> "6 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Lance",
					"damage"		=> "1d12",
					"cost"			=> "10 gp",
					"weight"		=> "6 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Longsword",
					"damage"		=> "1d8",
					"cost"			=> "15 gp",
					"weight"		=> "3 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Maul",
					"damage"		=> "2d6",
					"cost"			=> "10 gp",
					"weight"		=> "10 lb.",
					"dmg_type"		=> "bludgeoning",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Morningstar",
					"damage"		=> "1d8",
					"cost"			=> "15 gp",
					"weight"		=> "4 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Pike",
					"damage"		=> "1d10",
					"cost"			=> "5 gp",
					"weight"		=> "18 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Rapier",
					"damage"		=> "1d8",
					"cost"			=> "25 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Scimitar",
					"damage"		=> "1d6",
					"cost"			=> "25 gp",
					"weight"		=> "3 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Shortsword",
					"damage"		=> "1d6",
					"cost"			=> "10 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Trident",
					"damage"		=> "1d6",
					"cost"			=> "5 gp",
					"weight"		=> "4 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "War Pick",
					"damage"		=> "1d8",
					"cost"			=> "5 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Warhammer",
					"damage"		=> "1d8",
					"cost"			=> "15 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "bludgeoning",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Whip",
					"damage"		=> "1d4",
					"cost"			=> "2 gp",
					"weight"		=> "3 lb.",
					"dmg_type"		=> "slashing",
					"weapon_type"	=> "",
				],
			],
			"simple ranged weapon"	=> [
				[
					"name"			=> "Crossbow, light",
					"damage"		=> "1d8",
					"cost"			=> "25 gp",
					"weight"		=> "5 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Dart",
					"damage"		=> "1d4",
					"cost"			=> "5 cp",
					"weight"		=> "1/4 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Shortbow",
					"damage"		=> "1d6",
					"cost"			=> "25 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Sling",
					"damage"		=> "1d4",
					"cost"			=> "1 sp",
					"weight"		=> "--",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
			],
			"martial ranged weapon"	=> [
				[
					"name"			=> "Blowgun",
					"damage"		=> "1",
					"cost"			=> "10 gp",
					"weight"		=> "1 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Crossbow, hand",
					"damage"		=> "1d6",
					"cost"			=> "75 gp",
					"weight"		=> "3 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Crossbow, heavy",
					"damage"		=> "1d10",
					"cost"			=> "50 gp",
					"weight"		=> "18 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Longbow",
					"damage"		=> "1d8",
					"cost"			=> "50 gp",
					"weight"		=> "2 lb.",
					"dmg_type"		=> "piercing",
					"weapon_type"	=> "",
				],
				[
					"name"			=> "Net",
					"damage"		=> "--",
					"cost"			=> "1 gp",
					"weight"		=> "3 lb.",
					"dmg_type"		=> "--",
					"weapon_type"	=> "",
				],
			]
		]
	];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
        foreach($this->weapons AS $types)
		{
			foreach($types AS $type => $weaponArray)
			{
				foreach($weaponArray AS $weapon)
				{
					$weapon = Weapon::create($weapon);
					$weapon->weapon_type = $type;
					$weapon->save();
				}
			}
		}
    }
}
