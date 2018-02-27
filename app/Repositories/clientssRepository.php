<?php

namespace App\Repositories;

use App\Models\clientss;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class clientssRepository
 * @package App\Repositories
 * @version February 26, 2018, 4:33 pm UTC
 *
 * @method clientss findWithoutFail($id, $columns = ['*'])
 * @method clientss find($id, $columns = ['*'])
 * @method clientss first($columns = ['*'])
*/
class clientssRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clientss::class;
    }
}
