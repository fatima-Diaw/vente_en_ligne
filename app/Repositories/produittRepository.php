<?php

namespace App\Repositories;

use App\Models\produitt;
use App\Repositories\BaseRepository;

/**
 * Class produittRepository
 * @package App\Repositories
 * @version February 17, 2020, 1:00 pm UTC
*/

class produittRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'qte',
        'prix',
        'categorie_id'
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
        return produitt::class;
    }
}
