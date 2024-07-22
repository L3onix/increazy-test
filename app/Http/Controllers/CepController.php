<?php

namespace App\Http\Controllers;

use App\Http\Resources\CepResource;
use App\Models\Cep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
    public function searchLocal(string $inputCeps, Request $request)
    {
        $inputCeps = $this->formatInputCeps($inputCeps);
        $ceps = [];
        foreach ($inputCeps as $cep) {
            if ($responseViaCep = $this->consultViaCep($cep)) {
                array_push($ceps, new Cep($responseViaCep));
            }
        }
        $ceps = collect($ceps);
        return CepResource::collection($ceps);
    }

    public function formatInputCeps(string $ceps): array
    {
        $ceps = str_replace("-", "", $ceps);
        return explode(",", $ceps);
    }

    public function consultViaCep(string $cep): mixed
    {
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json", []);
        return json_decode($response->body(), true);
    }
}
