<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class services_ar
 * @package App\Models
 * @version October 2, 2018, 12:17 pm UTC
 *
 * @property string title
 * @property string single_photo
 * @property string id_services
 * @property string description
 * @property string slug
 */
class services_ar extends Model
{
	
	
	    protected $connection = 'mysqlar';

		
		
		
    use SoftDeletes;

    public $table = 'services_ars';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
         'status',
        'title',
        'id_services',
        'description',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'single_photo' => 'string',
        'id_services' => 'string',
        'description' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
          'title' => 'required',
        'status' => 'required',
        'description' => 'required'
    ];

    
}
