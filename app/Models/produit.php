<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class produit
 * @package App\Models
 * @version February 17, 2020, 1:13 pm UTC
 *
 * @property string nom
 * @property string description
 * @property string qte
 * @property string emplacement
 * @property integer categorie_id
 */
class produit extends Model
{
    public function getPrice()
    {
        $price = $this->price /1;

        return number_format($price,2, ',', ' ') . ' frcfa';
    }
    use SoftDeletes;

    public $table = 'produits';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'description',
        'qte',
        'emplacement',
        'price',
        'categorie_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'description' => 'string',
        'qte' => 'string',
        'emplacement' => 'string',
        'price' => 'integer',
        'categorie_id' => 'integer',

        
         
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

   public function categorie() 
    {
        return $this->belongsTo('App\Models\categorie');
    }
     public function ventes() 
    {
        return $this->hasMany('App\Models\vente');
    }
}
