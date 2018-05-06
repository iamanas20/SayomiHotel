<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuitePicture extends Model
{
    protected $table = 'suite_pictures';

    public $primaryKey = 'id';

    public $timeStamps = true;
}
