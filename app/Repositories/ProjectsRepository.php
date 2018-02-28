<?php

namespace App\Repositories;

use App\Models\Projects;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProjectsRepository
 * @package App\Repositories
 * @version February 27, 2018, 8:40 am UTC
 *
 * @method Projects findWithoutFail($id, $columns = ['*'])
 * @method Projects find($id, $columns = ['*'])
 * @method Projects first($columns = ['*'])
*/
class ProjectsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'photo',
        'gallery',
        'cat'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Projects::class;
    }
}
