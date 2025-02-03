<?php

namespace App\Http\Controllers;

use App\Models\Transacao;
use App\Models\Cliente;
use App\Models\Lojista;
use Illuminate\Http\Request;

class TransacaoController extends Controller
{
    public function index()
    {
        return Transacao::with(['remetente', 'destinatario'])->get();
    }

    public function store(Request $request)
    {
        $remetente = Cliente::findOrFail($request->remetente_id);
        $destinatario = Lojista::findOrFail($request->destinatario_id);

        if ($remetente->saldo < $request->valor) {
            return response()->json(['error' => 'Saldo insuficiente'], 400);
        }

        $remetente->saldo -= $request->valor;
        $destinatario->saldo += $request->valor;

        $remetente->save();
        $destinatario->save();

        $transacao = Transacao::create([
            'remetente_id' => $request->remetente_id,
            'destinatario_id' => $request->destinatario_id,
            'valor' => $request->valor,
        ]);

        return response()->json($transacao, 201);
    }
}