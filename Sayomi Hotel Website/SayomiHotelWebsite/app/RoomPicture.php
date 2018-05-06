<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomPicture extends Model
{
    protected $table = 'room_pictures';

    public $primaryKey = 'id';

    public $timeStamps = true;
}
