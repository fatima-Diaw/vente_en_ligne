<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class categorie
 * @package App\Models
 * @version February 16, 2020, 6:04 pm UTC
 *
 * @property string nom
 * @property string description
 */
class categorie extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'description',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
 public function produits() 
    {
        return $this->hasMany('App\Models\produit');
    }
   
}
