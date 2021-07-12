<?php

namespace App\Models\Admin;

use Eloquent as Model;



/**
 * Class vendas
 * @package App\Models\Admin
 * @version June 10, 2021, 2:48 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $eSTS
 * @property \Illuminate\Database\Eloquent\Collection $vNDTROCASUBS
 * @property integer $CHV_UNG
 * @property integer $CHV_PFJ
 * @property string $DOC
 * @property string $NUM_PEDIDO
 * @property string $DATAEMISSAO
 * @property string $DATAENTREGA
 * @property integer $CHV_VNDDR
 * @property number $PCT_COMISSAO
 * @property integer $FORMA_RECTO
 * @property integer $STATUS
 * @property integer $CHV_TRANSP
 * @property string $TIPOFRT
 * @property number $VLRFRT
 * @property number $SUBTOTAL
 * @property number $PCTDESCT
 * @property number $VLRDESCT
 * @property number $VLRTOTAL
 * @property integer $ID_SNH
 * @property string|\Carbon\Carbon $DAT_CAD
 * @property string|\Carbon\Carbon $DAT_GRV
 * @property string|\Carbon\Carbon $UPD
 * @property integer $CONTATO
 * @property string $OBS
 * @property integer $FIN_SN
 * @property integer $COMIS_PGTO_SN
 * @property integer $SELEC_SN
 * @property number $FIDELIDADE_PONTOS
 * @property number $FIDELIDADE_VLR
 * @property number $VLR_CCPFJ
 * @property number $VLRDESCTSUB
 * @property number $PCTDESCTSUB
 * @property number $Dinheiro
 * @property number $Parcelado
 * @property number $cheque
 * @property number $cartao
 * @property number $ContaCorrente
 * @property number $Troco
 * @property integer $C_COR
 * @property string $Din_SN
 * @property string $Chq_SN
 * @property string $Cartao_SN
 */
class vendas extends Model
{


    public $table = 'VND';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CHV_VND' => 'integer',
        'CHV_UNG' => 'integer',
        'CHV_PFJ' => 'integer',
        'DOC' => 'string',
        'NUM_PEDIDO' => 'string',
        'DATAEMISSAO' => 'date',
        'DATAENTREGA' => 'date',
        'CHV_VNDDR' => 'integer',
        'PCT_COMISSAO' => 'float',
        'FORMA_RECTO' => 'integer',
        'STATUS' => 'integer',
        'CHV_TRANSP' => 'integer',
        'TIPOFRT' => 'string',
        'VLRFRT' => 'decimal:4',
        'SUBTOTAL' => 'decimal:4',
        'PCTDESCT' => 'float',
        'VLRDESCT' => 'decimal:4',
        'VLRTOTAL' => 'decimal:4',
        'ID_SNH' => 'integer',
        'DAT_CAD' => 'datetime',
        'DAT_GRV' => 'datetime',
        'UPD' => 'datetime',
        'CONTATO' => 'integer',
        'OBS' => 'string',
        'FIN_SN' => 'integer',
        'COMIS_PGTO_SN' => 'integer',
        'SELEC_SN' => 'integer',
        'FIDELIDADE_PONTOS' => 'float',
        'FIDELIDADE_VLR' => 'decimal:4',
        'VLR_CCPFJ' => 'decimal:4',
        'VLRDESCTSUB' => 'decimal:4',
        'PCTDESCTSUB' => 'float',
        'Dinheiro' => 'decimal:4',
        'Parcelado' => 'decimal:4',
        'cheque' => 'decimal:4',
        'cartao' => 'decimal:4',
        'ContaCorrente' => 'decimal:4',
        'Troco' => 'decimal:4',
        'C_COR' => 'integer',
        'Din_SN' => 'string',
        'Chq_SN' => 'string',
        'Cartao_SN' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CHV_UNG' => 'nullable|integer',
        'CHV_PFJ' => 'nullable|integer',
        'DOC' => 'nullable|string|max:50',
        'NUM_PEDIDO' => 'nullable|string|max:50',
        'DATAEMISSAO' => 'nullable',
        'DATAENTREGA' => 'nullable',
        'CHV_VNDDR' => 'nullable|integer',
        'PCT_COMISSAO' => 'nullable|numeric',
        'FORMA_RECTO' => 'nullable',
        'STATUS' => 'nullable',
        'CHV_TRANSP' => 'nullable|integer',
        'TIPOFRT' => 'nullable|string|max:20',
        'VLRFRT' => 'nullable|numeric',
        'SUBTOTAL' => 'nullable|numeric',
        'PCTDESCT' => 'nullable|numeric',
        'VLRDESCT' => 'nullable|numeric',
        'VLRTOTAL' => 'nullable|numeric',
        'ID_SNH' => 'nullable|integer',
        'DAT_CAD' => 'nullable',
        'DAT_GRV' => 'nullable',
        'UPD' => 'nullable',
        'CONTATO' => 'nullable|integer',
        'OBS' => 'nullable|string',
        'FIN_SN' => 'nullable|integer',
        'COMIS_PGTO_SN' => 'nullable',
        'SELEC_SN' => 'nullable',
        'FIDELIDADE_PONTOS' => 'nullable|numeric',
        'FIDELIDADE_VLR' => 'nullable|numeric',
        'VLR_CCPFJ' => 'nullable|numeric',
        'VLRDESCTSUB' => 'nullable|numeric',
        'PCTDESCTSUB' => 'nullable|numeric',
        'Dinheiro' => 'nullable|numeric',
        'Parcelado' => 'nullable|numeric',
        'cheque' => 'nullable|numeric',
        'cartao' => 'nullable|numeric',
        'ContaCorrente' => 'nullable|numeric',
        'Troco' => 'nullable|numeric',
        'C_COR' => 'nullable|integer',
        'Din_SN' => 'nullable|string|max:1',
        'Chq_SN' => 'nullable|string|max:1',
        'Cartao_SN' => 'nullable|string|max:1',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function eSTS()
    {
        return $this->belongsToMany(\App\Models\Admin\EST::class, 'VND_SUB');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vNDTROCASUBS()
    {
        return $this->hasMany(\App\Models\Admin\VNDTROCASUB::class, 'ID_VND');
    }
}
