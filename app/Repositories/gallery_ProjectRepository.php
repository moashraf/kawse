<?php

namespace App\Repositories;

use App\Models\gallery_Project;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class gallery_ProjectRepository
 * @package App\Repositories
 * @version February 27, 2018, 9:06 am UTC
 *
 * @method gallery_Project findWithoutFail($id, $columns = ['*'])
 * @method gallery_Project find($id, $columns = ['*'])
 * @method gallery_Project first($columns = ['*'])
*/
class gallery_ProjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'projects_id',
        'img_url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return gallery_Project::class;
    }
}
