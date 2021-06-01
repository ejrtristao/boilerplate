<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class clientes
 * @package App\Models
 * @version May 14, 2021, 1:09 am UTC
 *
 * @property string $PESSOA
 * @property string $TIPO
 * @property string $TIPOCADASTRO
 * @property string|\Carbon\Carbon $DATACADASTRO
 * @property string $NOMECLIE
 * @property string $APELIDO
 * @property string $CNPJCPF
 * @property string $INSCRICAOESTADUALRG
 * @property string $RUA
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $ESTADO
 * @property string $CEP
 * @property string $FONE1
 * @property string $FAX
 * @property string $CELULAR
 * @property string $HOMEPAGE
 * @property string $EMAIL
 * @property string $ATIVIDADEPRINCIPAL
 * @property string $COMISN
 * @property number $COMISSAO
 * @property string $MESANIVER
 * @property string $INATIVO
 * @property string|\Carbon\Carbon $DAT_GRV
 * @property string|\Carbon\Carbon $DAT_CAD
 * @property string|\Carbon\Carbon $DAT_ANI_FUND
 * @property string $OBS
 * @property number $PCT_COMIS_EMI
 * @property number $PCT_COMIS_AR
 * @property string|\Carbon\Carbon $UPD
 * @property string $NUMERO
 * @property string $COMPLEMENTO
 * @property string $PONTO_REFERENCIA
 * @property integer $SELEC_SN
 * @property number $LIMITECRED
 * @property number $VND_ENTREGAR
 */
class clientes extends Model
{


    public $table = 'PFJ';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    protected $primaryKey = 'CHAVPFJ';

    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CHAVPFJ' => 'integer',
        'PESSOA' => 'string',
        'TIPO' => 'string',
        'TIPOCADASTRO' => 'string',
        'DATACADASTRO' => 'datetime',
        'NOMECLIE' => 'string',
        'APELIDO' => 'string',
        'CNPJCPF' => 'string',
        'INSCRICAOESTADUALRG' => 'string',
        'RUA' => 'string',
        'BAIRRO' => 'string',
        'CIDADE' => 'string',
        'ESTADO' => 'string',
        'CEP' => 'string',
        'FONE1' => 'string',
        'FAX' => 'string',
        'CELULAR' => 'string',
        'HOMEPAGE' => 'string',
        'EMAIL' => 'string',
        'ATIVIDADEPRINCIPAL' => 'string',
        'COMISN' => 'string',
        'COMISSAO' => 'float',
        'MESANIVER' => 'string',
        'INATIVO' => 'string',
        'DAT_GRV' => 'datetime',
        'DAT_CAD' => 'datetime',
        'DAT_ANI_FUND' => 'datetime',
        'OBS' => 'string',
        'PCT_COMIS_EMI' => 'decimal:2',
        'PCT_COMIS_AR' => 'decimal:2',
        'UPD' => 'datetime',
        'NUMERO' => 'string',
        'COMPLEMENTO' => 'string',
        'PONTO_REFERENCIA' => 'string',
        'SELEC_SN' => 'integer',
        'LIMITECRED' => 'decimal:4',
        'VND_ENTREGAR' => 'decimal:4'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NOMECLIE' => 'required',
        'APELIDO' => 'required',
    ];

    
}
