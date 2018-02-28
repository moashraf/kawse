<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reviews
 * @package App\Models
 * @version February 28, 2018, 4:54 pm UTC
 *
 * @property string name
 * @property string job
 * @property string body
 * @property string photo
 */
class Reviews extends Model
{
    use SoftDeletes;

    public $table = 'reviews';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'job',
        'body',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'job' => 'string',
        'body' => 'string',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'job' => 'required',
        'body' => 'required',
        'photo' => 'required'
    ];

    
}
