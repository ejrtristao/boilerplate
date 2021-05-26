<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class produtos
 * @package App\Models
 * @version May 14, 2021, 2:25 am UTC
 *
 * @property string $descricao
 * @property integer $inativo
 */
class produtos extends Model
{


    public $table = 'produtos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    protected $primaryKey = 'id';

    public $fillable = [
        'descricao',
        'inativo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descricao' => 'string',
        'inativo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descricao' => 'nullable|string|max:50',
        'inativo' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
