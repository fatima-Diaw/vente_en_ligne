<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class client
 * @package App\Models
 * @version February 16, 2020, 6:01 pm UTC
 *
 * @property string nom
 * @property string adresse
 * @property string telephone
 */
class client extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'adresse',
        'telephone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'adresse' => 'string',
        'telephone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function ventes()
    {
         return $this->hasMany('App\Models\vente');
    }
    

    
}
