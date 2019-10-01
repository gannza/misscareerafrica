<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Booking
 * @package App\Models
 * @version October 1, 2019, 6:29 pm UTC
 *
 * @property string name
 * @property string phone
 * @property string email
 * @property string organization
 * @property string event_name
 * @property string event_date
 * @property string location
 * @property string venue
 * @property string description
 */
class Booking extends Model
{

    public $table = 'booking';
    


    public $fillable = [
        'name',
        'phone',
        'email',
        'organization',
        'event_name',
        'event_date',
        'location',
        'venue',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'organization' => 'string',
        'event_name' => 'string',
        'event_date' => 'date',
        'location' => 'string',
        'venue' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'organization' => 'required',
        'event_name' => 'required',
        'event_date' => 'required',
        'location' => 'required',
        'venue' => 'required',
        'description' => 'required'
    ];

    
}
