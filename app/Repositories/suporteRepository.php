<?php

namespace App\Repositories;

use App\Models\suporte;
use App\Repositories\BaseRepository;

/**
 * Class suporteRepository
 * @package App\Repositories
 * @version May 14, 2021, 2:49 am UTC
*/

class suporteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cliente_id',
        'prioridade',
        'produto_id',
        'descricao',
        'dataCadastro',
        'dataFinalizacao',
        'observacoes'
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
        return suporte::class;
    }
}
