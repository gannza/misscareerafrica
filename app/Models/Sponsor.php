<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Sponsor
 * @package App\Models
 * @version September 27, 2019, 9:17 am UTC
 *
 * @property string fname
 * @property string lname
 * @property string em ail
 * @property string phone_number
 * @property string street
 * @property string city
 * @property string province
 * @property string areas
 */
class Sponsor extends Model
{

    public $table = 'sponsors';
    


    public $fillable = [
        'fname',
        'lname',
        'email',
        'phone_number',
        'street',
        'city',
        'province',
        'areas',
        'comment',
        'country'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fname' => 'string',
        'lname' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'street' => 'string',
        'city' => 'string',
        'province' => 'string',
        'areas' => 'string',
        'comment'=> 'string',
        'country'=> 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email'=>'required',
        'phone_number'=>'required'
    ];

    
}
