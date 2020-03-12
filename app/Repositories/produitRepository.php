<?php

namespace App\Repositories;

use App\Models\produit;
use App\Repositories\BaseRepository;

/**
 * Class produitRepository
 * @package App\Repositories
 * @version February 17, 2020, 1:13 pm UTC
*/

class produitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'description',
        'qte',
        'emplacement',
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
        return produit::class;
    }
}
