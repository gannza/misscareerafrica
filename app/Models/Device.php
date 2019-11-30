<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{

    public $table = 'devices';



    public $fillable = [
        'last_signin',
        'ip_address',
        'browser_login',
        'browser_version',
        'device_login',
        'device_version',
        'device',
        'current_location',
        'language',
        'country',
        'root',
        'https',
        'candidate_id'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
