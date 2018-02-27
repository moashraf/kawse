<?php

namespace App\Repositories;

use App\Models\clients;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class clientsRepository
 * @package App\Repositories
 * @version February 26, 2018, 4:40 pm UTC
 *
 * @method clients findWithoutFail($id, $columns = ['*'])
 * @method clients find($id, $columns = ['*'])
 * @method clients first($columns = ['*'])
*/
class clientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'img',
        'link'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clients::class;
    }
}
