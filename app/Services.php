<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    /**
	*Fillable fields
    *
    *@var array
    */
    protected $fillable = [
        'service_name',
        'available_slots',
        'service_date',
        'service_description',
    ];
}
