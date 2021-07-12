<?php

namespace App\Repositories\Admin;

use App\Models\Admin\vendasCursos;
use App\Repositories\BaseRepository;

/**
 * Class vendasCursosRepository
 * @package App\Repositories\Admin
 * @version June 10, 2021, 2:50 pm UTC
*/

class vendasCursosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'VND_ID',
        'CURSO_ID',
        'VALOR',
        'VALOR_DESCONTO',
        'VALOR_TOTAL',
        'OBSERVACOES'
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
        return vendasCursos::class;
    }
}
