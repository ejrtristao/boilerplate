<?php

namespace App\Models\Admin;

use Eloquent as Model;



/**
 * Class turmas
 * @package App\Models\Admin
 * @version June 10, 2021, 2:43 pm UTC
 *
 * @property integer $PROFESSOR_ID
 * @property string $NOME
 * @property string $DATA_INICIO
 * @property string $DATA_TERMINO
 * @property string $STATUS
 */
class turmas extends Model
{


    public $table = 'TURMAS';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'PROFESSOR_ID',
        'NOME',
        'DATA_INICIO',
        'DATA_TERMINO',
        'STATUS'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'PROFESSOR_ID' => 'integer',
        'NOME' => 'string',
        'DATA_INICIO' => 'date',
        'DATA_TERMINO' => 'date',
        'STATUS' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'PROFESSOR_ID' => 'required|integer',
        'NOME' => 'nullable|string|max:50',
        'DATA_INICIO' => 'nullable',
        'DATA_TERMINO' => 'nullable',
        'STATUS' => 'required|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
