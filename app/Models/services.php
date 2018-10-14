<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class services
 * @package App\Models
 * @version October 2, 2018, 11:56 am UTC
 *
 * @property integer created_by
 * @property integer last_updated_by
 * @property integer id_category
 * @property string single_photo
 */
class services extends Model
{
 	    protected $connection = 'mysql';

    public $table = 'services';
    

 use SoftDeletes;

     

    protected $dates = ['deleted_at'];
	
    public $fillable = [
        'image',
        'icon',
        'status' 
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_by' => 'integer',
        'last_updated_by' => 'integer',
         'single_photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required',
      //  'icon' => 'required',
        // 'status' => 'required'
    ];

       public function get_services_description_en()
{
        return $this->hasMany('App\Models\services_en', 'id_services');

		}

		
		      public function get_services_description_ar()
{
        return $this->hasMany('App\Models\services_ar', 'id_services');

		}
		
		

 
	

}
