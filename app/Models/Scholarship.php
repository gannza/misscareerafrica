<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Scholarship
 * @package App\Models
 * @version September 27, 2019, 1:59 pm UTC
 *
 * @property string fname
 * @property string lname
 * @property string email
 * @property string birth_date
 * @property string phone_code
 * @property string phone_number
 * @property string residence
 * @property string gender
 * @property string nationality
 * @property string national_ID_or_Passport_ID
 * @property string parents_or_guardian_name
 * @property string parents_guardian_contacts
 * @property string q1
 * @property string q2
 * @property string q3
 * @property string q4
 * @property boolean i_agree
 */
class Scholarship extends Model
{

    public $table = 'scholarships';
    


    public $fillable = [
        'fname',
        'lname',
        'email',
        'birth_date',
        'phone_code',
        'phone_number',
        'residence',
        'gender',
        'nationality',
        'national_ID_or_Passport_ID',
        'parents_or_guardian_name',
        'parents_guardian_contacts',
        'q1',
        'q2',
        'q3',
        'q4',
        'i_agree'
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
        'birth_date' => 'date',
        'phone_code' => 'string',
        'phone_number' => 'string',
        'residence' => 'string',
        'gender' => 'string',
        'nationality' => 'string',
        'national_ID_or_Passport_ID' => 'string',
        'parents_or_guardian_name' => 'string',
        'parents_guardian_contacts' => 'string',
        'i_agree' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'birth_date' => 'required',
        'phone_code' => 'required',
        'phone_number' => 'required',
        'residence' => 'required',
        'gender' => 'required',
        'nationality' => 'required',
        'national_ID_or_Passport_ID' => 'required',
        'parents_or_guardian_name' => 'required',
        'parents_guardian_contacts' => 'required',
        'q1' => 'required',
        'q2' => 'required',
        'q3' => 'required',
        'q4' => 'required',
        'i_agree' => 'required'
    ];

    
}
