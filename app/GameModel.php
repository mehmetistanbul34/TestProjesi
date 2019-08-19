<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = "GAME";
    public $timestamps = false; 
}
