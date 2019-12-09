<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $table = 'prices';
    public $primaryKey = 'id';
    public $timestamps = false;
}
