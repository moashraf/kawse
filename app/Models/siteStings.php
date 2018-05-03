<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class siteStings
 * @package App\Models
 * @version February 28, 2018, 4:28 pm UTC
 *
 * @property string key
 * @property string value
 */
class siteStings extends Model
{
    use SoftDeletes;

    public $table = 'site_stings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'key',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'key' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
       
        'value' => 'required'
    ];

    
}
