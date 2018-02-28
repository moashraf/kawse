<?php

namespace App\Repositories;

use App\Models\catProject;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class catProjectRepository
 * @package App\Repositories
 * @version February 27, 2018, 11:15 am UTC
 *
 * @method catProject findWithoutFail($id, $columns = ['*'])
 * @method catProject find($id, $columns = ['*'])
 * @method catProject first($columns = ['*'])
*/
class catProjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'img_url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return catProject::class;
    }
}
