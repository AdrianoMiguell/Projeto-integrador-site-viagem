<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roteiro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'manha',
        'subtitulo_manha',
        'tarde',
        'subtitulo_tarde',
        'noite',
        'subtitulo_noite',
        'viagem_id'
    ];
}
