<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class gallery_Project
 * @package App\Models
 * @version February 27, 2018, 9:06 am UTC
 *
 * @property integer projects_id
 * @property string img_url
 */
class gallery_Project extends Model
{
    use SoftDeletes;

    public $table = 'gallery__projects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'projects_id',
        'img_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'projects_id' => 'integer',
        'img_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'projects_id' => 'numeric',
        'img_url' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
    ];

    
}
