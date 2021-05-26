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
        'PESSOA' => 'nullable|string|max:1',
        'TIPO' => 'nullable|string|max:20',
        'TIPOCADASTRO' => 'nullable|string|max:50',
        'DATACADASTRO' => 'nullable',
        'NOMECLIE' => 'nullable|string|max:80',
        'APELIDO' => 'nullable|string|max:50',
        'CNPJCPF' => 'nullable|string|max:50',
        'INSCRICAOESTADUALRG' => 'nullable|string|max:50',
        'RUA' => 'nullable|string|max:80',
        'BAIRRO' => 'nullable|string|max:50',
        'CIDADE' => 'nullable|string|max:50',
        'ESTADO' => 'nullable|string|max:50',
        'CEP' => 'nullable|string|max:50',
        'FONE1' => 'nullable|string|max:50',
        'FAX' => 'nullable|string|max:50',
        'CELULAR' => 'nullable|string|max:50',
        'HOMEPAGE' => 'nullable|string|max:80',
        'EMAIL' => 'nullable|string|max:80',
        'ATIVIDADEPRINCIPAL' => 'nullable|string|max:50',
        'COMISN' => 'nullable|string|max:1',
        'COMISSAO' => 'nullable|numeric',
        'MESANIVER' => 'nullable|string|max:2',
        'INATIVO' => 'nullable|string|max:2',
        'DAT_GRV' => 'nullable',
        'DAT_CAD' => 'nullable',
        'DAT_ANI_FUND' => 'nullable',
        'OBS' => 'nullable|string',
        'PCT_COMIS_EMI' => 'nullable|numeric',
        'PCT_COMIS_AR' => 'nullable|numeric',
        'UPD' => 'nullable',
        'NUMERO' => 'nullable|string|max:20',
        'COMPLEMENTO' => 'nullable|string|max:30',
        'PONTO_REFERENCIA' => 'nullable|string|max:120',
        'SELEC_SN' => 'nullable|integer',
        'LIMITECRED' => 'nullable|numeric',
        'VND_ENTREGAR' => 'nullable|numeric',
        'updated_at' => 'nullable',
        'created_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
