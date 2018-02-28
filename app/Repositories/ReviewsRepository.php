<?php

namespace App\Repositories;

use App\Models\Reviews;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReviewsRepository
 * @package App\Repositories
 * @version February 28, 2018, 4:54 pm UTC
 *
 * @method Reviews findWithoutFail($id, $columns = ['*'])
 * @method Reviews find($id, $columns = ['*'])
 * @method Reviews first($columns = ['*'])
*/
class ReviewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'job',
        'body',
        'photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Reviews::class;
    }
}
