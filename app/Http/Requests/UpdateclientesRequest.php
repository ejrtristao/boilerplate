<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\clientes;

class UpdateclientesRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'NOMECLIE.required' => 'O Nome do cliente é obrigatório',
            'APELIDO.required' => 'O Apelido do cliente é obrigatório',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = clientes::$rules;
        
        return $rules;
    }
}
