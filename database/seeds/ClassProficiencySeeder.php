<?php

use Illuminate\Database\Seeder;
use App\Models\ClassProficiency;
use App\Models\Skill;

class ClassProficiencySeeder extends Seeder
{
	//types = saving throw, weapon, armor, skill
	private $proficiencies = [
		1 => [
			'types' => [
				"attribute" 	=> [1, 3],
				"armor"			=> ["proficiencies" => [1, 2, 6], "armorIds" => []],
				"weapon"		=> ["proficiencies" => [4, 5], "weaponIds" => []],				
				"tools"			=> []
			],
			"starting_skills"	=> [
				1, 8, 10, 13, 14, 16
			],
			"num_skills_granted" => 2
		],
		2 => [
			'types' => [
				"attribute" 	=> [2, 6],
				"armor"			=> ["proficiencies" => [1], "armorIds" => []],
				"weapon"		=> ["proficiencies" => [4], "weaponIds" => [19, 35, 23, 25]],
				"tools"			=> []
			],
			"starting_skills"	=> [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18],
			"num_skills_granted" => 3
		]
	];
	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
		foreach($this->proficiencies AS $clID => $clContent)
		{
			//$clID = 1
			foreach($clContent AS $el => $subEl)
			{
				//$el = "types" or "num_skills_granted"
				if($el === "types")
				{					
					foreach($subEl AS $key => $valArray) //key = "saving throw" or "armor" etc.
					{
						if($key === "armor" OR $key === "weapon")
						{							
							foreach($valArray AS $k => $newValArray)
							{
								if(!empty($newValArray))
								{
									if($k === "proficiencies")
									{
										foreach($newValArray AS $v)
										{
											ClassProficiency::create([
												"type"				=> $key,
												"class_id"			=> $clID,
												"weapon_armor_type_id"	=> $v
											]);
										}
									}
									
									if($k === "armorIds")
									{
										foreach($newValArray AS $v)
										{
											ClassProficiency::create([
												"type"				=> $key,
												"class_id"			=> $clID,
												"armor_id"			=> $v
											]);
										}
									}
									
									if($k === "weaponIds")
									{
										foreach($newValArray AS $v)
										{
											ClassProficiency::create([
												"type"				=> $key,
												"class_id"			=> $clID,
												"weapon_id"			=> $v
											]);
										}
									}
								}
							}
						}
						else
						{
							foreach($valArray AS $val)
							{
								$identifier = $key . "_id"; //attribute_id, skill_id, etc.
								if($key === "attribute")
								{
									$type = "saving throw";									
									ClassProficiency::create([
										"type"		=> "saving throw",
										"class_id"	=> $clID,
										$identifier	=> $val
									]);									
								}
								else
								{
									ClassProficiency::create([
										"type"		=> $key,
										"class_id"	=> $clID,
										$identifier	=> $val
									]);
								}
							}
						}
					}
				}
				if($el === "num_skills_granted")
				{
					ClassProficiency::create([
						"type"					=> "num_skills_granted",
						"class_id"				=> $clID,
						"num_skills_granted"	=> $subEl
					]);
				}
				if($el === "starting_skills"){
					ClassProficiency::create([
						"type"				=> "starting_skills",
						"class_id"			=> $clID,
						"starting_skills"	=> serialize($subEl)
					]);
				}
			}
		}
    }
}

