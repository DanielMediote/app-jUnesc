<?php

namespace Jornada\Admin;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'name',
        'start',
        'end',
        'dateRegistration',
        'dateSubmission',
        'registration',
        'submission',
        'active',
    ];
}
