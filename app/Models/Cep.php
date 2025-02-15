<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{
    use HasFactory;
    protected $fillable = [
        'cep',
        'logradouro',
        'complemento',
        'unidade',
        'bairro',
        'localidade',
        'uf',
        'ibge',
        'gia',
        'ddd',
        'siafi'
    ];
}
