<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    public function properties()
	{
		return $this->belongsToMany(\App\Models\Property::class, 'weapon_properties');
	}
}
