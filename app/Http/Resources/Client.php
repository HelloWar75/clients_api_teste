<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Client extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'estado' => $this->estado,
            'cidade' => $this->cidade,
            'endereco' => $this->endereco,
            'cep' => $this->cep,
            'telefone' => $this->telefone,
            'celular' => $this->celular,
            'email' => $this->email
        ];
    }

}
