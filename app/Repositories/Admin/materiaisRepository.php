<?php

namespace App\Repositories\Admin;

use App\Models\Admin\materiais;
use App\Repositories\BaseRepository;

/**
 * Class materiaisRepository
 * @package App\Repositories\Admin
 * @version June 10, 2021, 2:42 pm UTC
*/

class materiaisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'NOME',
        'VALOR',
        'STATUS',
        'QUANTIDADE_ESTOQUE',
        'DETALHES'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return materiais::class;
    }
}
