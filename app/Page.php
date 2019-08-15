<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $primaryKey = 'Game_id';
    protected $table = "Games";
    public $timestamps = false; // Migration içinde tanımlıdır (Migration oluşturmadık)
}
