<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuiteBooking extends Model
{
    protected $table = 'suite_bookings';
    
    public $primaryKey = 'id';
    
    public $timestamps = true;
}
