<?php

namespace App\Repositories\Admin;

use App\Models\Admin\cursos;
use App\Repositories\BaseRepository;

/**
 * Class cursosRepository
 * @package App\Repositories\Admin
 * @version June 10, 2021, 2:38 pm UTC
*/

class cursosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'NOME',
        'VALOR',
        'DETALHES',
        'STATUS'
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
        return cursos::class;
    }
}
