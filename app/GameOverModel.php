<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameOverModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = "GAME_OVER";
    public $timestamps = false; 
    protected $dateFormat = 'U';
}
