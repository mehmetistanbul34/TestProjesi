<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "GAME";
    public $timestamps = false; // Migration içinde tanımlıdır (Migration oluşturmadık)
}
