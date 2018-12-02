<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subrace;
use App\Models\Attribute;

class Race extends Model
{
    public function subraces()
	{
		return $this->hasMany(Subrace::class, 'parent_race_id', 'id');
	}
	
	public function asi()
	{
		return $this->belongsToMany(Attribute::class, "racial_asi")->withPivot("amount");
	}
}
