<?php

namespace App\Repositories;

use App\Models\partner;
use App\Repositories\BaseRepository;

/**
 * Class partnerRepository
 * @package App\Repositories
 * @version July 30, 2022, 7:48 am UTC
*/

class partnerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'foto'
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
        return partner::class;
    }
}
