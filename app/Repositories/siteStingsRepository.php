<?php

namespace App\Repositories;

use App\Models\siteStings;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class siteStingsRepository
 * @package App\Repositories
 * @version February 28, 2018, 4:28 pm UTC
 *
 * @method siteStings findWithoutFail($id, $columns = ['*'])
 * @method siteStings find($id, $columns = ['*'])
 * @method siteStings first($columns = ['*'])
*/
class siteStingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'key',
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return siteStings::class;
    }
}
