<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'page',
        'school',
        'level',
        'range',
        'concentration',
        'material',
        'ritual',
        'classes',
        'casting_time',
        'duration',
        'components',
        'higher_levels'
    ];

    public function components()
    {
        return unserialize($this->components);
    }

    public function desc()
    {
        return unserialize($this->desc);
    }
}
