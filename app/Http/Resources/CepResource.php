<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CepResource extends JsonResource
{
    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'cep' => $this->cep,
            'label' => "{$this->logradouro}, {$this->localidade}",
            'logradouro' => $this->logradouro,
            'complemento' => $this->complemento,
            'unidade' => $this->unidade,
            'bairro' => $this->bairro,
            'localidade' => $this->localidade,
            'uf' => $this->uf,
            'ibge' => $this->ibge,
            'gia' => $this->gia,
            'ddd' => $this->ddd,
            'siafi' => $this->siafi
        ];
    }
}
