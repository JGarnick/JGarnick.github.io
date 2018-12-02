<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = "skills";
	
	public function getAbbr()
	{
		return substr($this->attribute, 0, 3);
	}
}
