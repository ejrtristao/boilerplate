<?php

namespace App\Models\Admin;

use Eloquent as Model;



/**
 * Class vendasMateriais
 * @package App\Models\Admin
 * @version June 10, 2021, 2:51 pm UTC
 *
 * @property integer $VND_ID
 * @property integer $MATERIAL_ID
 * @property number $VALOR
 * @property number $VALOR_DESCONTO
 * @property number $VALOR_TOTAL
 * @property string $OBSERVACOES
 */
class vendasMateriais extends Model
{


    public $table = 'VND_MATERIAIS';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'VND_ID',
        'MATERIAL_ID',
        'VALOR',
        'VALOR_DESCONTO',
        'VALOR_TOTAL',
        'OBSERVACOES'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'VND_ID' => 'integer',
        'MATERIAL_ID' => 'integer',
        'VALOR' => 'decimal:2',
        'VALOR_DESCONTO' => 'decimal:2',
        'VALOR_TOTAL' => 'decimal:2',
        'OBSERVACOES' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'VND_ID' => 'required|integer',
        'MATERIAL_ID' => 'required|integer',
        'VALOR' => 'nullable|numeric',
        'VALOR_DESCONTO' => 'nullable|numeric',
        'VALOR_TOTAL' => 'nullable|numeric',
        'OBSERVACOES' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
