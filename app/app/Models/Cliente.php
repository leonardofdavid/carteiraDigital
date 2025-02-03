<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'saldo', 'tipo_usuario'];

    public function transacoesRemetente()
    {
        return $this->hasMany(Transacao::class, 'remetente_id');
    }

    public function transacoesDestinatario()
    {
        return $this->hasMany(Transacao::class, 'destinatario_id');
    }
}