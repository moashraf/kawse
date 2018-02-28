<?php

namespace App\Repositories;

use App\Models\services;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class servicesRepository
 * @package App\Repositories
 * @version February 27, 2018, 1:40 pm UTC
 *
 * @method services findWithoutFail($id, $columns = ['*'])
 * @method services find($id, $columns = ['*'])
 * @method services first($columns = ['*'])
*/
class servicesRepository extends BaseRepository
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
        return services::class;
    }
}
