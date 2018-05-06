<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guests';
    
    public $primaryKey = 'id';
    
    public $timestamps = true;
}
