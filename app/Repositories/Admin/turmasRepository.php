<?php

namespace App\Repositories\Admin;

use App\Models\Admin\turmas;
use App\Repositories\BaseRepository;

/**
 * Class turmasRepository
 * @package App\Repositories\Admin
 * @version June 10, 2021, 2:43 pm UTC
*/

class turmasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'PROFESSOR_ID',
        'NOME',
        'DATA_INICIO',
        'DATA_TERMINO',
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
        return turmas::class;
    }
}
