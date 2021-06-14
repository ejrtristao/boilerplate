<?php

namespace App\Models\Admin;

use Eloquent as Model;



/**
 * Class cursos
 * @package App\Models\Admin
 * @version June 10, 2021, 2:38 pm UTC
 *
 * @property string $NOME
 * @property number $VALOR
 * @property string $DETALHES
 * @property string $STATUS
 */
class cursos extends Model
{


    public $table = 'CURSOS';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'NOME',
        'VALOR',
        'DETALHES',
        'STATUS'
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
        'DETALHES' => 'string',
        'STATUS' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NOME' => 'required|string|max:50',
        'VALOR' => 'required',
        'DETALHES' => 'nullable|string',
        'STATUS' => 'required|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function setVALORAttribute($value)
    {
        return $this->attributes['VALOR'] = number_format(str_replace(",",".",str_replace(".","",$value)), 2, '.', '');
    }

    public function getVALORAttribute()
    {
        // return number_format($this->attributes['VALOR'],2,',','.');
        return round($this->attributes['VALOR'],2);
    }
}
