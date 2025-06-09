<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    // O método index() continua igual...
    public function index()
    {
        return Livro::orderBy('titulo')->get();
    }

    // Método privado para centralizar as regras de validação
    private function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'ano_publicacao' => 'required|integer|min:1',
            'numero_paginas' => 'required|integer|min:1',
            'data_aquisicao' => 'required|date',
            // --- REGRAS ADICIONADAS AQUI ---
            'editora' => 'sometimes|string|nullable|max:255',
            'resumo' => 'sometimes|string|nullable',
        ];
    }

    public function store(Request $request)
    {
        // Usamos o método rules() aqui
        $request->validate($this->rules());

        $livro = Livro::create($request->all());
        return response()->json($livro, 201);
    }

    // O método show() continua igual...
    public function show(Livro $livro)
    {
        return $livro;
    }

    public function update(Request $request, Livro $livro)
    {
        // E usamos o método rules() aqui também
        $request->validate($this->rules());

        $livro->update($request->all());
        return response()->json($livro, 200);
    }

    // O método destroy() continua igual...
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return response()->json(null, 204);
    }
}
