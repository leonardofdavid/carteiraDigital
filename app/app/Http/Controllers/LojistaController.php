<?php

namespace App\Http\Controllers;

use App\Models\Lojista;
use Illuminate\Http\Request;

class LojistaController extends Controller
{
    public function index()
    {
        return Lojista::all();
    }

    public function store(Request $request)
    {
        $lojista = Lojista::create($request->all());
        return response()->json($lojista, 201);
    }

    public function update(Request $request, Lojista $lojista)
    {
        $lojista->update($request->all());
        return response()->json($lojista);
    }

    public function destroy(Lojista $lojista)
    {
        $lojista->delete();
        return response()->json(null, 204);
    }
}