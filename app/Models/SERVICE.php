<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SERVICE
 * @package App\Models
 * @version August 16, 2018, 2:19 pm UTC
 *
 * @property string title
 * @property string slug
 * @property string single_photo
 * @property string body
 */
class SERVICE extends Model
{
    use SoftDeletes;

    public $table = 's_e_r_v_i_c_e_s';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'slug',
        'single_photo',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'single_photo' => 'string',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'single_photo' => 'required',
        'body' => 'required'
    ];

    
}
