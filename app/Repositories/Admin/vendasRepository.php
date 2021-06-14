<?php

namespace App\Repositories\Admin;

use App\Models\Admin\vendas;
use App\Repositories\BaseRepository;

/**
 * Class vendasRepository
 * @package App\Repositories\Admin
 * @version June 10, 2021, 2:48 pm UTC
*/

class vendasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CHV_UNG',
        'CHV_PFJ',
        'DOC',
        'NUM_PEDIDO',
        'DATAEMISSAO',
        'DATAENTREGA',
        'CHV_VNDDR',
        'PCT_COMISSAO',
        'FORMA_RECTO',
        'STATUS',
        'CHV_TRANSP',
        'TIPOFRT',
        'VLRFRT',
        'SUBTOTAL',
        'PCTDESCT',
        'VLRDESCT',
        'VLRTOTAL',
        'ID_SNH',
        'DAT_CAD',
        'DAT_GRV',
        'UPD',
        'CONTATO',
        'OBS',
        'FIN_SN',
        'COMIS_PGTO_SN',
        'SELEC_SN',
        'FIDELIDADE_PONTOS',
        'FIDELIDADE_VLR',
        'VLR_CCPFJ',
        'VLRDESCTSUB',
        'PCTDESCTSUB',
        'Dinheiro',
        'Parcelado',
        'cheque',
        'cartao',
        'ContaCorrente',
        'Troco',
        'C_COR',
        'Din_SN',
        'Chq_SN',
        'Cartao_SN'
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
        return vendas::class;
    }
}
