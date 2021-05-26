<?php

namespace App\Repositories;

use App\Models\clientes;
use App\Repositories\BaseRepository;

/**
 * Class clientesRepository
 * @package App\Repositories
 * @version May 14, 2021, 1:09 am UTC
*/

class clientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'PESSOA',
        'TIPO',
        'TIPOCADASTRO',
        'DATACADASTRO',
        'NOMECLIE',
        'APELIDO',
        'CNPJCPF',
        'INSCRICAOESTADUALRG',
        'RUA',
        'BAIRRO',
        'CIDADE',
        'ESTADO',
        'CEP',
        'FONE1',
        'FAX',
        'CELULAR',
        'HOMEPAGE',
        'EMAIL',
        'ATIVIDADEPRINCIPAL',
        'COMISN',
        'COMISSAO',
        'MESANIVER',
        'INATIVO',
        'DAT_GRV',
        'DAT_CAD',
        'DAT_ANI_FUND',
        'OBS',
        'PCT_COMIS_EMI',
        'PCT_COMIS_AR',
        'UPD',
        'NUMERO',
        'COMPLEMENTO',
        'PONTO_REFERENCIA',
        'SELEC_SN',
        'LIMITECRED',
        'VND_ENTREGAR'
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
        
        return clientes::class;
    }
}
