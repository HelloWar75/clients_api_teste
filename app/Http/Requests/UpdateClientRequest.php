<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'cpf' => 'required|max:255',
            'estado' => 'required|max:255',
            'cidade' => 'required|max:255',
            'endereco' => 'required|max:255',
            'cep' => 'required|max:255',
            'telefone' => 'required|max:255',
            'celular' => 'required|max:255',
            'email' => 'required|max:255'
        ];
    }
}
