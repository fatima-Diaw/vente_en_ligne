<?php

namespace App\Repositories;

use App\Models\client;
use App\Repositories\BaseRepository;

/**
 * Class clientRepository
 * @package App\Repositories
 * @version February 16, 2020, 6:01 pm UTC
*/

class clientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'adresse',
        'telephone'
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
        return client::class;
    }
}
