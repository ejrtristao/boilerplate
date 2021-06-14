<?php

namespace App\Models\Admin;

use Eloquent as Model;



/**
 * Class alunos
 * @package App\Models\Admin
 * @version June 10, 2021, 2:42 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $aPS
 * @property \Illuminate\Database\Eloquent\Collection $uNGS
 * @property \Illuminate\Database\Eloquent\Collection $aPADIANTS
 * @property \Illuminate\Database\Eloquent\Collection $aRS
 * @property \Illuminate\Database\Eloquent\Collection $aRCHQEMIS
 * @property \Illuminate\Database\Eloquent\Collection $uNG1S
 * @property \Illuminate\Database\Eloquent\Collection $cUS
 * @property \Illuminate\Database\Eloquent\Collection $mARKUPS
 * @property \Illuminate\Database\Eloquent\Collection $pFJCTTS
 * @property \Illuminate\Database\Eloquent\Collection $pFJENDS
 * @property \Illuminate\Database\Eloquent\Collection $vNDCOMISSES
 * @property \Illuminate\Database\Eloquent\Collection $vNDCONSIGS
 * @property integer $CHV_UNG
 * @property string $PESSOA
 * @property string $TIPO
 * @property string $TIPOCADASTRO
 * @property integer $CHAVREGI
 * @property string $DATACADASTRO
 * @property string $NOMECLIE
 * @property string $APELIDO
 * @property string $CNPJ
 * @property string $INSCRICAOESTADUAL
 * @property string $CPF
 * @property string $RG
 * @property string $RUA
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $ESTADO
 * @property string $CEP
 * @property string $PAIS
 * @property string $FONE1
 * @property string $FONE2
 * @property string $FAX
 * @property string $CELULAR
 * @property string $HOMEPAGE
 * @property string $EMAIL
 * @property string $ATIVIDADEPRINCIPAL
 * @property string $COMISN
 * @property number $COMISSAO
 * @property string $MESANIVER
 * @property string $CONTATO1
 * @property string $CONTATO2
 * @property string $CONTATO3
 * @property string $CARGOCONTATO1
 * @property string $CARGOCONTATO2
 * @property string $CARGOCONTATO3
 * @property string $FONECONTATO1
 * @property string $FONECONTATO2
 * @property string $FONECONTATO3
 * @property string $IMPR
 * @property string $INATIVO
 * @property string $CCO_PFJ
 * @property string $CCV_SN
 * @property string|\Carbon\Carbon $DAT_GRV
 * @property string|\Carbon\Carbon $DAT_CAD
 * @property string $DAT_ANI_FUND
 * @property string $OBS
 * @property number $PCT_COMIS_EMI
 * @property number $PCT_COMIS_AR
 * @property integer $CHV_COT_TAB_VND
 * @property integer $STAT_VND
 * @property number $VND_MAIOR
 * @property string $VND_ULT_DT
 * @property number $VND_ULT_VLR
 * @property number $VND_MED
 * @property number $VND_QTD
 * @property integer $TIP_VNDD
 * @property integer $ID_ORIG
 * @property integer $ID_VNDD_INT
 * @property integer $ID_VNDD_EXT
 * @property string|\Carbon\Carbon $UPD
 * @property string $NUMERO
 * @property string $COMPLEMENTO
 * @property string $PONTO_REFERENCIA
 * @property integer $COD_MUNICIPIO
 * @property integer $QUALIF_SN
 * @property integer $Tipo_Operacao
 * @property number $Taxa
 * @property string $DATA_CASAMENTO
 * @property string $Est_Civ
 * @property string $Orig_Cli
 * @property string $NUM_PASSAP
 * @property string $PASSAP_VALID
 */
class alunos extends Model
{


    public $table = 'PFJ';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CHAVPFJ' => 'integer',
        'CHV_UNG' => 'integer',
        'PESSOA' => 'string',
        'TIPO' => 'string',
        'TIPOCADASTRO' => 'string',
        'CHAVREGI' => 'integer',
        'DATACADASTRO' => 'date',
        'NOMECLIE' => 'string',
        'APELIDO' => 'string',
        'CNPJ' => 'string',
        'INSCRICAOESTADUAL' => 'string',
        'CPF' => 'string',
        'RG' => 'string',
        'RUA' => 'string',
        'BAIRRO' => 'string',
        'CIDADE' => 'string',
        'ESTADO' => 'string',
        'CEP' => 'string',
        'PAIS' => 'string',
        'FONE1' => 'string',
        'FONE2' => 'string',
        'FAX' => 'string',
        'CELULAR' => 'string',
        'HOMEPAGE' => 'string',
        'EMAIL' => 'string',
        'ATIVIDADEPRINCIPAL' => 'string',
        'COMISN' => 'string',
        'COMISSAO' => 'float',
        'MESANIVER' => 'string',
        'CONTATO1' => 'string',
        'CONTATO2' => 'string',
        'CONTATO3' => 'string',
        'CARGOCONTATO1' => 'string',
        'CARGOCONTATO2' => 'string',
        'CARGOCONTATO3' => 'string',
        'FONECONTATO1' => 'string',
        'FONECONTATO2' => 'string',
        'FONECONTATO3' => 'string',
        'IMPR' => 'string',
        'INATIVO' => 'string',
        'CCO_PFJ' => 'string',
        'CCV_SN' => 'string',
        'DAT_GRV' => 'datetime',
        'DAT_CAD' => 'datetime',
        'DAT_ANI_FUND' => 'date',
        'OBS' => 'string',
        'PCT_COMIS_EMI' => 'decimal:2',
        'PCT_COMIS_AR' => 'decimal:2',
        'CHV_COT_TAB_VND' => 'integer',
        'STAT_VND' => 'integer',
        'VND_MAIOR' => 'decimal:2',
        'VND_ULT_DT' => 'date',
        'VND_ULT_VLR' => 'decimal:2',
        'VND_MED' => 'decimal:2',
        'VND_QTD' => 'decimal:0',
        'TIP_VNDD' => 'integer',
        'ID_ORIG' => 'integer',
        'ID_VNDD_INT' => 'integer',
        'ID_VNDD_EXT' => 'integer',
        'UPD' => 'datetime',
        'NUMERO' => 'string',
        'COMPLEMENTO' => 'string',
        'PONTO_REFERENCIA' => 'string',
        'COD_MUNICIPIO' => 'integer',
        'QUALIF_SN' => 'integer',
        'Tipo_Operacao' => 'integer',
        'Taxa' => 'decimal:3',
        'DATA_CASAMENTO' => 'date',
        'Est_Civ' => 'string',
        'Orig_Cli' => 'string',
        'NUM_PASSAP' => 'string',
        'PASSAP_VALID' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CHV_UNG' => 'nullable|integer',
        'PESSOA' => 'nullable|string|max:1',
        'TIPO' => 'nullable|string|max:20',
        'TIPOCADASTRO' => 'nullable|string|max:50',
        'CHAVREGI' => 'nullable|integer',
        'DATACADASTRO' => 'nullable',
        'NOMECLIE' => 'nullable|string|max:80',
        'APELIDO' => 'nullable|string|max:50',
        'CNPJ' => 'nullable|string|max:50',
        'INSCRICAOESTADUAL' => 'nullable|string|max:50',
        'CPF' => 'nullable|string|max:50',
        'RG' => 'nullable|string|max:50',
        'RUA' => 'nullable|string|max:80',
        'BAIRRO' => 'nullable|string|max:50',
        'CIDADE' => 'nullable|string|max:50',
        'ESTADO' => 'nullable|string|max:50',
        'CEP' => 'nullable|string|max:50',
        'PAIS' => 'nullable|string|max:50',
        'FONE1' => 'nullable|string|max:50',
        'FONE2' => 'nullable|string|max:50',
        'FAX' => 'nullable|string|max:50',
        'CELULAR' => 'nullable|string|max:50',
        'HOMEPAGE' => 'nullable|string|max:80',
        'EMAIL' => 'nullable|string|max:80',
        'ATIVIDADEPRINCIPAL' => 'nullable|string|max:50',
        'COMISN' => 'nullable|string|max:1',
        'COMISSAO' => 'nullable|numeric',
        'MESANIVER' => 'nullable|string|max:2',
        'CONTATO1' => 'nullable|string|max:80',
        'CONTATO2' => 'nullable|string|max:50',
        'CONTATO3' => 'nullable|string|max:50',
        'CARGOCONTATO1' => 'nullable|string|max:80',
        'CARGOCONTATO2' => 'nullable|string|max:50',
        'CARGOCONTATO3' => 'nullable|string|max:50',
        'FONECONTATO1' => 'nullable|string|max:50',
        'FONECONTATO2' => 'nullable|string|max:50',
        'FONECONTATO3' => 'nullable|string|max:50',
        'IMPR' => 'nullable|string|max:2',
        'INATIVO' => 'nullable|string|max:2',
        'CCO_PFJ' => 'nullable|string|max:80',
        'CCV_SN' => 'nullable|string|max:1',
        'DAT_GRV' => 'nullable',
        'DAT_CAD' => 'nullable',
        'DAT_ANI_FUND' => 'nullable',
        'OBS' => 'nullable|string',
        'PCT_COMIS_EMI' => 'nullable|numeric',
        'PCT_COMIS_AR' => 'nullable|numeric',
        'CHV_COT_TAB_VND' => 'nullable|integer',
        'STAT_VND' => 'nullable',
        'VND_MAIOR' => 'nullable|numeric',
        'VND_ULT_DT' => 'nullable',
        'VND_ULT_VLR' => 'nullable|numeric',
        'VND_MED' => 'nullable|numeric',
        'VND_QTD' => 'nullable|numeric',
        'TIP_VNDD' => 'nullable',
        'ID_ORIG' => 'nullable',
        'ID_VNDD_INT' => 'nullable|integer',
        'ID_VNDD_EXT' => 'nullable|integer',
        'UPD' => 'nullable',
        'NUMERO' => 'nullable|string|max:20',
        'COMPLEMENTO' => 'nullable|string|max:30',
        'PONTO_REFERENCIA' => 'nullable|string|max:120',
        'COD_MUNICIPIO' => 'nullable|integer',
        'QUALIF_SN' => 'nullable',
        'Tipo_Operacao' => 'nullable',
        'Taxa' => 'nullable|numeric',
        'DATA_CASAMENTO' => 'nullable',
        'Est_Civ' => 'nullable|string|max:30',
        'Orig_Cli' => 'nullable|string|max:50',
        'NUM_PASSAP' => 'nullable|string|max:50',
        'PASSAP_VALID' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function aPS()
    {
        return $this->hasMany(\App\Models\Admin\AP::class, 'CHV_PFJ');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function uNGS()
    {
        return $this->belongsToMany(\App\Models\Admin\UNG::class, 'AP_ADIANT');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function aPADIANTS()
    {
        return $this->belongsToMany(\App\Models\Admin\APADIANT::class, 'AP_ADIANT_SUB');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function aRS()
    {
        return $this->hasMany(\App\Models\Admin\AR::class, 'CHV_PFJ');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function aRCHQEMIS()
    {
        return $this->belongsToMany(\App\Models\Admin\ARCHQEMI::class, 'ARCHQ');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function uNG1S()
    {
        return $this->belongsToMany(\App\Models\Admin\UNG::class, 'CAL_FIN');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cUS()
    {
        return $this->hasMany(\App\Models\Admin\CU::class, 'CHAVPFJ');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function mARKUPS()
    {
        return $this->hasMany(\App\Models\Admin\MARKUP::class, 'ID_PFJ');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pFJCTTS()
    {
        return $this->hasMany(\App\Models\Admin\PFJCTT::class, 'CHAVPFJ');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pFJENDS()
    {
        return $this->hasMany(\App\Models\Admin\PFJEND::class, 'CHAVPFJ');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vNDCOMISSES()
    {
        return $this->hasMany(\App\Models\Admin\VNDCOMISS::class, 'ID_VNDDR');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function vNDCONSIGS()
    {
        return $this->belongsToMany(\App\Models\Admin\VNDCONSIG::class, 'VND_CONSIG_SUB');
    }
}
