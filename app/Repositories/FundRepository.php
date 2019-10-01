<?php

namespace App\Repositories;

use App\Models\Fund;
use App\Repositories\BaseRepository;

/**
 * Class FundRepository
 * @package App\Repositories
 * @version October 1, 2019, 5:31 pm UTC
*/

class FundRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fund::class;
    }
}
