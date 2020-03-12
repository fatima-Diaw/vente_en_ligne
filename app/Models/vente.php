<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vente
 * @package App\Models
 * @version February 17, 2020, 1:30 pm UTC
 *
 * @property integer client_id
 * @property integer produit_id
 */
class vente extends Model
{
    use SoftDeletes;

    public $table = 'ventes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'client_id',
        'produit_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'produit_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function client() 
    {
        return $this->belongsTo('App\Models\client');
    }
    public function produit() 
    {
        return $this->belongsTo('App\Models\produit');
    }

    
}
