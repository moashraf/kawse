<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Projects
 * @package App\Models
 * @version February 27, 2018, 8:40 am UTC
 *
 * @property string title
 * @property string body
 * @property string photo
 * @property integer gallery
 * @property integer cat
 */
class Projects extends Model
{
    use SoftDeletes;

    public $table = 'projects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'photo',
        'cat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'photo' => 'string',
        'cat' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required',

        'photo' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
         'cat' => 'required'
    ];

    
}
