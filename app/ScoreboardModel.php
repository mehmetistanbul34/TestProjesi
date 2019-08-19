<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreboardModel extends Model
{
    protected $primaryKey = 'User_id';
    protected $table = "Gameras";
    public $timestamps = false; // Migration içinde tanımlıdır (Migration oluşturmadık)
}
