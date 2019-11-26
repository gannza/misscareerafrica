<?php

namespace App\Repositories;

use App\Models\Candidate;
use App\Repositories\BaseRepository;

/**
 * Class CandidateRepository
 * @package App\Repositories
 * @version September 27, 2019, 12:00 am UTC
*/

class CandidateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fname',
        'lname',
        'email',
        'dob',
        'phone_code',
        'phone_number',
        'street',
        'city',
        'province',
        'country',
        'level_education',
        'former_school_attended',
        'education_background',
        'current_occupation',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'session_id',
        'votes',
        'is_selected',
        'bio'
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
        return Candidate::class;
    }
}
