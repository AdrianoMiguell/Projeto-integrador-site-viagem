<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagemTuristica extends Model
{
    use HasFactory;

    protected $fillable = [
        'caminho',
        'legenda',
        'viagem_id',
        'ponto_turistico_id',
    ];

    public function ponto_turistico()
    {
        return $this->hasMany(PontoTuristico::class);
    }
}
