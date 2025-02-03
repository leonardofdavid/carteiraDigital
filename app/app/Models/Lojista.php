<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lojista extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'saldo', 'tipo_usuario'];

    public function transacoes()
    {
        return $this->hasMany(Transacao::class, 'destinatario_id');
    }
}