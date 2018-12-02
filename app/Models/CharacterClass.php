<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ClassProficiency;
use App\Models\Attribute;
use App\Models\Armor;
use App\Models\Weapon;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class CharacterClass extends Model
{
    protected $table = "classes";
	
	public function general_info()
	{
		//return $this->hasMany(ClassProficiency::class, "class_id");
		$data = [];
		$data["hit_die"]["die"] = $this->hit_die;
		$data["hit_die"]["base"] = (int)str_replace("d", "", $this->hit_die);
		$data["skills_granted"] = DB::table("class_proficiencies")->where("class_id", $this->id)->where("type", "num_skills_granted")->pluck("num_skills_granted")->first();
		//Get weapon category proficiency, i.e. simple, martial, etc.
		foreach(DB::table("class_proficiencies")->where("class_id", $this->id)->where("type", "weapon")->whereNotNull('weapon_armor_type_id')->pluck("weapon_armor_type_id") AS $p){								
			$data["proficiencies"]["weapon_types"][] = DB::table("weapon_armor_types")->where("id", $p)->first()->name;
		}
		//Get actual weapon proficiency, i.e. longsword, rapier, etc.
		foreach(DB::table("class_proficiencies")->where("class_id", $this->id)->where("type", "weapon")->whereNotNull('weapon_id')->pluck("weapon_id") AS $p){
			$data["proficiencies"]["weapons"][] = Weapon::findOrFail($p);
		}
		//Get armor category proficiency, i.e. light, medium, etc.
		foreach(DB::table("class_proficiencies")->where("class_id", $this->id)->where("type", "armor")->whereNotNull('weapon_armor_type_id')->pluck("weapon_armor_type_id") AS $p){								
			$data["proficiencies"]["armor_types"][] = DB::table("weapon_armor_types")->where("id", $p)->first()->name;
		}
		//Get actual armor proficiency, i.e. leather, breastplate, etc.
		foreach(DB::table("class_proficiencies")->where("class_id", $this->id)->where("type", "armor")->whereNotNull('armor_id')->pluck("armor_id") AS $p){
			$data["proficiencies"]["armor"][] = Armor::findOrFail($p);
		}
		//Get saving throw proficiency, i.e. Strength, Dexterity, etc.
		foreach(DB::table("class_proficiencies")->where("class_id", $this->id)->where("type", "saving throw")->whereNotNull('attribute_id')->pluck("attribute_id") AS $p){
			$data["proficiencies"]["saves"][] = Attribute::findOrFail($p);
		}
		//Get skill proficiency, i.e. Acrobatics, Perception, etc.
		$skill_options = unserialize(DB::table("class_proficiencies")->where("class_id", $this->id)->where("type", "starting_skills")->pluck("starting_skills")->first());
		
		if(!empty($skill_options)){
			foreach($skill_options AS $p){
				$data["starting_skills"][] = Skill::findOrFail($p);
			}
		}
		
		return $data;
	}
	
	// public function saving_throws()
	// {
		// $attIDs = $this->proficiencies->where('type', 'saving throw')->pluck('attribute_id');
		// $attArray = Attribute::whereIn('id', $attIDs)->pluck("name");
		// return $attArray;
	// }
}
