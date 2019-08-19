<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamerModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = "GAMER";
    public $timestamps = false; 
}
