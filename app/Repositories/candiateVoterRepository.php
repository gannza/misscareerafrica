<?php

namespace App\Repositories;

use App\Models\candiateVoter;
use App\Repositories\BaseRepository;

/**
 * Class candiateVoterRepository
 * @package App\Repositories
 * @version December 10, 2019, 6:53 pm UTC
*/

class candiateVoterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'phone_number',
        'candiateId'
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
        return candiateVoter::class;
    }
}
