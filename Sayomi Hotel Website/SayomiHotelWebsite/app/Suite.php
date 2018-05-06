<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suite extends Model
{
    protected $table = 'suites';

    public $primaryKey = 'suiteID';
        
    public $timeStamps = true;    
}
