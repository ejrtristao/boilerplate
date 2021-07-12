<?php

namespace App\Repositories\Admin;

use App\Models\Admin\vendasMateriais;
use App\Repositories\BaseRepository;

/**
 * Class vendasMateriaisRepository
 * @package App\Repositories\Admin
 * @version June 10, 2021, 2:51 pm UTC
*/

class vendasMateriaisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'VND_ID',
        'MATERIAL_ID',
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
        return vendasMateriais::class;
    }
}
