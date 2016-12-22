<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    /**
	*Fillable fields
    *
    *@var array
    */
    protected $fillable = [
        'first_name',
        'last_name',
        'class',
        'address',
        'age',
        'marital_status',
        'contacts'
    ];

     public function getFullName() {
        return $this->first_name.' '.$this->last_name;
    }
}
