<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Products
 * @package App\Models
 * @version April 5, 2018, 10:54 am UTC
 *
 * @property string name
 * @property string body
 * @property string single_photo
 * @property integer photos_id
 * @property string component
 * @property string Net_weight
 * @property string Note
 * @property string Packing_content
 * @property integer cat_id
 * @property string lang
 * @property string slug
 */
class  ProductsPhotos extends Model
{
    use SoftDeletes;

    public $table = 'productsphotos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Product_id',
        'Photo' 
    ];

 

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Photo' => 'required|min:1|mimes:jpeg,jpg,png,gif',
        'Product_id' => 'required' 
    ];

    
}
