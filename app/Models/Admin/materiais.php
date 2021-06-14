<?php

namespace App\Models\Admin;

use Eloquent as Model;



/**
 * Class materiais
 * @package App\Models\Admin
 * @version June 10, 2021, 2:42 pm UTC
 *
 * @property string $NOME
 * @property number $VALOR
 * @property string $STATUS
 * @property number $QUANTIDADE_ESTOQUE
 * @property string $DETALHES
 */
class materiais extends Model
{


    public $table = 'MATERIAIS';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'NOME',
        'VALOR',
        'STATUS',
        'QUANTIDADE_ESTOQUE',
        'DETALHES'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'NOME' => 'string',
        'VALOR' => 'decimal:2',
        'STATUS' => 'string',
        'QUANTIDADE_ESTOQUE' => 'decimal:0',
        'DETALHES' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NOME' => 'required|string|max:50',
        'VALOR' => 'nullable|numeric',
        'STATUS' => 'required|string|max:50',
        'QUANTIDADE_ESTOQUE' => 'nullable|numeric',
        'DETALHES' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
