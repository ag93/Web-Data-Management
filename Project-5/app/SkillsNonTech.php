<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillsNonTech extends Model
{
    protected $table = 'non_tech_skills';
    public $primaryKey = 'id';
    public $timestamps = false;
}
