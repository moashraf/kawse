<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class catProject
 * @package App\Models
 * @version February 27, 2018, 11:15 am UTC
 *
 * @property string title
 * @property string img_url
 */
class catProject extends Model
{
    use SoftDeletes;

    public $table = 'cat_projects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'img_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'img_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    'img_url' => 'mimes:jpeg,jpg,png,gif|required|max:10000',

    ];

    
}
