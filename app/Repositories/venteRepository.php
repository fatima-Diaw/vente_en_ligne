<?php

namespace App\Repositories;

use App\Models\vente;
use App\Repositories\BaseRepository;

/**
 * Class venteRepository
 * @package App\Repositories
 * @version February 17, 2020, 1:30 pm UTC
*/

class venteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'client_id',
        'produit_id'
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
        return vente::class;
    }
}
