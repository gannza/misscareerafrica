<?php

namespace App\Repositories;

use App\Models\Scholarship;
use App\Repositories\BaseRepository;

/**
 * Class ScholarshipRepository
 * @package App\Repositories
 * @version September 27, 2019, 1:59 pm UTC
*/

class ScholarshipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Scholarship::class;
    }
}
