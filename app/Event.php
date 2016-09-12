<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillables = [
        'name',
        'description',
        'start_date'
    ];
}
