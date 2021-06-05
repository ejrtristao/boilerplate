<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PFJ_Produtos
 * @package App\Models
 * @version May 14, 2021, 1:09 am UTC
 *
 * @property string $PFJ_id
 * @property string $produtos_id
 */
class PFJ_Produtos extends Model
{
    public $table = 'PFJ_Produtos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function produtos()
    {
        return $this->belongsToMany(\App\Models\Produtos::class, 'Produto_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function PFJ()
    {
        return $this->belongsToMany(\App\Models\clientes::class, 'PFJ'  );
    }
}
