<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    protected $table = "_z_country";
    protected $fileable = [
      
        'iso',
        'name',
        'dname',
        'iso3',
        'position',
        'numcode',
        'phonecode',
        'created',
        'register_by',
        'modified',
        'modified_by',
    ];
}
