<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'estado_id',
    ];

    // public function comments(): HasMany
    // {
    //     return $this->hasMany(Comment::class);
    // }
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function viagem()
    {
        return $this->hasOne(Viagem::class);
    }
}
