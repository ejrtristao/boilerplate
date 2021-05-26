<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class suporte
 * @package App\Models
 * @version May 14, 2021, 2:49 am UTC
 *
 * @property integer $cliente_id
 * @property integer $prioridade
 * @property integer $produto_id
 * @property string $descricao
 * @property string $dataCadastro
 * @property string $dataFinalizacao
 * @property string $observacoes
 */
class suporte extends Model
{


    public $table = 'suporte';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'cliente_id',
        'prioridade',
        'produto_id',
        'descricao',
        'dataCadastro',
        'dataFinalizacao',
        'observacoes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente_id' => 'integer',
        'prioridade' => 'integer',
        'produto_id' => 'integer',
        'descricao' => 'string',
        'dataCadastro' => 'date',
        'dataFinalizacao' => 'date',
        'observacoes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cliente_id' => 'nullable|integer',
        'prioridade' => 'nullable|integer',
        'produto_id' => 'nullable|integer',
        'descricao' => 'nullable|string|max:500',
        'dataCadastro' => 'nullable',
        'dataFinalizacao' => 'nullable',
        'observacoes' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
