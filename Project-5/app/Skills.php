<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table = 'tech_skills';
    public $primaryKey = 'id';
    public $timestamps = false;
}
