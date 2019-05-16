<?php

namespace Jornada\Admin;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $fillable =[
        'envent_id',
        'type_id',
        'name',
        'date',
        'description',
        'location',
        'vacancy',
    ];
}
