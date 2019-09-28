<?php

namespace App\Repositories;

use App\Models\Volunteer;
use App\Repositories\BaseRepository;

/**
 * Class VolunteerRepository
 * @package App\Repositories
 * @version September 27, 2019, 10:32 am UTC
*/

class VolunteerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'fname',
        'lname',
        'country',
        'phone_number',
        'street',
        'city',
        'province',
        'areas_of_help'
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
        return Volunteer::class;
    }
}
