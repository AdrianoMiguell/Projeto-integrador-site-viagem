<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PontoTuristico extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'viagem_id',
    ];

    public function cidade()
    {
        return $this->hasMany(Cidade::class);
    }

    public function viagem()
    {
        return $this->belongsTo(Viagem::class);
    }

    public function imagem_turistica()
    {
        return $this->belongsTo(ImagemTuristica::class);
    }
}
