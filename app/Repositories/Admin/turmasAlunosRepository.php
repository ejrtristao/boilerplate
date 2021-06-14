<?php

namespace App\Repositories\Admin;

use App\Models\Admin\turmasAlunos;
use App\Repositories\BaseRepository;

/**
 * Class turmasAlunosRepository
 * @package App\Repositories\Admin
 * @version June 10, 2021, 2:53 pm UTC
*/

class turmasAlunosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TURMA_ID',
        'ALUNO_ID'
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
        return turmasAlunos::class;
    }
}
