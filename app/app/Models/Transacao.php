<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    use HasFactory;

    protected $fillable = ['remetente_id', 'destinatario_id', 'valor'];

    public function remetente()
    {
        return $this->belongsTo(Cliente::class, 'remetente_id');
    }

    public function destinatario()
    {
        return $this->belongsTo(Lojista::class, 'destinatario_id');
    }
}