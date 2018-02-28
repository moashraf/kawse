<?php

namespace App\Repositories;

use App\Models\slider;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class sliderRepository
 * @package App\Repositories
 * @version February 28, 2018, 4:47 pm UTC
 *
 * @method slider findWithoutFail($id, $columns = ['*'])
 * @method slider find($id, $columns = ['*'])
 * @method slider first($columns = ['*'])
*/
class sliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return slider::class;
    }
}
