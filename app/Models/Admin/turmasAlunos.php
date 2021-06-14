<?php

namespace App\Models\Admin;

use Eloquent as Model;



/**
 * Class turmasAlunos
 * @package App\Models\Admin
 * @version June 10, 2021, 2:53 pm UTC
 *
 * @property integer $TURMA_ID
 * @property integer $ALUNO_ID
 */
class turmasAlunos extends Model
{


    public $table = 'TURMAS_ALUNOS';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'TURMA_ID',
        'ALUNO_ID'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'TURMA_ID' => 'integer',
        'ALUNO_ID' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'TURMA_ID' => 'required|integer',
        'ALUNO_ID' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
