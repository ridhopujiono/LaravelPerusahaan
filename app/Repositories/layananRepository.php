<?php

namespace App\Repositories;

use App\Models\layanan;
use App\Repositories\BaseRepository;

/**
 * Class layananRepository
 * @package App\Repositories
 * @version July 30, 2022, 7:43 am UTC
*/

class layananRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_layanan',
        'keterangan',
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
        return layanan::class;
    }
}
