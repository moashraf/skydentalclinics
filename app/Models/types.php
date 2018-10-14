<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class types
 * @package App\Models
 * @version August 16, 2018, 12:45 pm UTC
 *
 * @property string title
 * @property string body
 * @property string single_photo
 * @property string slug
 */
class types extends Model
{
    use SoftDeletes;

    public $table = 'types';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'single_photo',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'single_photo' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'single_photo' => 'required',
        'slug' => 'required'
    ];

    
}
