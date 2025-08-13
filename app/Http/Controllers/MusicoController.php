<?php

namespace App\Http\Controllers;

use App\Http\Service\MusicoService;
use Illuminate\Http\Request;

class MusicoController extends Controller
{
    public function index()
    {
        $musicoService = new MusicoService();
        $musicos = $musicoService->buscarTodosMusicos();
        return response()->json($musicos, 200);
    }

    public function exibir(int $id)
    {
        $musicoService = new MusicoService();
        $musico = $musicoService->buscarMusico($id);
        return response()->json($musico, 200);
    }

    public function criar(Request $request)
    {
        $musicoService = new MusicoService();
        $musico = $musicoService->criarMusico($request->all());
        return response()->json($musico, 201);
    }

    public function atualizar(Request $request, int $id)
    {
        $musicoService = new MusicoService();
        $musico = $musicoService->atualizarMusico($request->all(), $id);
        return response()->json($musico, 200);
    }

    public function deletar(int $id)
    {
        $musicoService = new MusicoService();
        $musico = $musicoService->deletarMusico($id);
        return response()->json($musico, 200);
    }
}