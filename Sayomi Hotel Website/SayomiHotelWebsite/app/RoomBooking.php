<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomBooking extends Model
{
    protected $table = 'room_bookings';
    
    public $primaryKey = 'id';
    
    public $timestamps = true;
}
