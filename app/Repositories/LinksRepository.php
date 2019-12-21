<?php

namespace App\Repositories;

use App\Models\Links;
use App\Repositories\BaseRepository;

/**
 * Class LinksRepository
 * @package App\Repositories
 * @version December 21, 2019, 2:19 pm UTC
*/

class LinksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'contents',
        'links',
        'linkType'
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
        return Links::class;
    }
}
