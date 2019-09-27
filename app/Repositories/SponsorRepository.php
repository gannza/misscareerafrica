<?php

namespace App\Repositories;

use App\Models\Sponsor;
use App\Repositories\BaseRepository;

/**
 * Class SponsorRepository
 * @package App\Repositories
 * @version September 27, 2019, 9:17 am UTC
*/

class SponsorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'fname',
        'lname',
        'em ail',
        'phone_number',
        'street',
        'city',
        'province',
        'areas'
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
        return Sponsor::class;
    }
}
