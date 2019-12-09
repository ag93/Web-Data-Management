<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = 'tag_line';
    public $primaryKey = 'id';
    public $timestamps = false;
}
