<?php

namespace App\Repositories\Admin;

use App\Models\Admin\alunos;
use App\Repositories\BaseRepository;

/**
 * Class alunosRepository
 * @package App\Repositories\Admin
 * @version June 10, 2021, 2:42 pm UTC
*/

class alunosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CHV_UNG',
        'PESSOA',
        'TIPO',
        'TIPOCADASTRO',
        'CHAVREGI',
        'DATACADASTRO',
        'NOMECLIE',
        'APELIDO',
        'CNPJ',
        'INSCRICAOESTADUAL',
        'CPF',
        'RG',
        'RUA',
        'BAIRRO',
        'CIDADE',
        'ESTADO',
        'CEP',
        'PAIS',
        'FONE1',
        'FONE2',
        'FAX',
        'CELULAR',
        'HOMEPAGE',
        'EMAIL',
        'ATIVIDADEPRINCIPAL',
        'COMISN',
        'COMISSAO',
        'MESANIVER',
        'CONTATO1',
        'CONTATO2',
        'CONTATO3',
        'CARGOCONTATO1',
        'CARGOCONTATO2',
        'CARGOCONTATO3',
        'FONECONTATO1',
        'FONECONTATO2',
        'FONECONTATO3',
        'IMPR',
        'INATIVO',
        'CCO_PFJ',
        'CCV_SN',
        'DAT_GRV',
        'DAT_CAD',
        'DAT_ANI_FUND',
        'OBS',
        'PCT_COMIS_EMI',
        'PCT_COMIS_AR',
        'CHV_COT_TAB_VND',
        'STAT_VND',
        'VND_MAIOR',
        'VND_ULT_DT',
        'VND_ULT_VLR',
        'VND_MED',
        'VND_QTD',
        'TIP_VNDD',
        'ID_ORIG',
        'ID_VNDD_INT',
        'ID_VNDD_EXT',
        'UPD',
        'NUMERO',
        'COMPLEMENTO',
        'PONTO_REFERENCIA',
        'COD_MUNICIPIO',
        'QUALIF_SN',
        'Tipo_Operacao',
        'Taxa',
        'DATA_CASAMENTO',
        'Est_Civ',
        'Orig_Cli',
        'NUM_PASSAP',
        'PASSAP_VALID'
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
        return alunos::class;
    }
}
