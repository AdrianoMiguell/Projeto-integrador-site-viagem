<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'sugestoes',
        'cidade_id',
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    public function pontos_turisticos()
    {
        return $this->hasMany(PontoTuristico::class);
    }
    public function imagem_cidade()
    {
        return $this->hasMany(ImagemCidade::class);
    }
}
