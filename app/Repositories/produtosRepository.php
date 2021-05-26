<?php

namespace App\Repositories;

use App\Models\produtos;
use App\Repositories\BaseRepository;

/**
 * Class produtosRepository
 * @package App\Repositories
 * @version May 14, 2021, 2:25 am UTC
*/

class produtosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descricao',
        'inativo'
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
        return produtos::class;
    }
}
