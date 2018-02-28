<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class slider
 * @package App\Models
 * @version February 28, 2018, 4:47 pm UTC
 *
 * @property string title
 * @property string body
 * @property string photo
 */
class slider extends Model
{
    use SoftDeletes;

    public $table = 'sliders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'photo' => 'required'
    ];

    
}
