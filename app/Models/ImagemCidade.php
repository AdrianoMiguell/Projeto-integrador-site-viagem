<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagemCidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'caminho',
        'legenda',
        'viagem_id',
    ];

    public function viagem() {
        return $this->belongsTo(Viagem::class);
    }

}
