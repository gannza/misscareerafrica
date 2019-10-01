<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Fund
 * @package App\Models
 * @version October 1, 2019, 5:31 pm UTC
 *
 * @property string full_name
 * @property string email
 * @property string phone_number
 * @property string background
 * @property string financial_status
 * @property string career_background
 * @property string attachement
 * @property string why_give_capital
 * @property string how_capital_transform_life
 * @property string how_will_you_make_profit
 * @property string comptentitive_advantage
 */
class Fund extends Model
{

    public $table = 'funds';
    


    public $fillable = [
        'full_name',
        'email',
        'phone_number',
        'background',
        'financial_status',
        'career_background',
        'attachement',
        'why_give_capital',
        'how_capital_transform_life',
        'how_will_you_make_profit',
        'comptentitive_advantage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'full_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'attachement' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'attachement'=> 'required',
        'email'=> 'required',
        'full_name'=> 'required',
        'phone_number'=> 'required'
    ];

    
}
