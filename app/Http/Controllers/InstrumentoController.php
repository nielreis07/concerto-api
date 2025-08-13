<?php

namespace App\Http\Controllers;

use App\Http\Service\InstrumentoService;
use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    public function index() 
    {
        $instrumentoService = new InstrumentoService();
        $instrumentos = $instrumentoService->buscarTodosInstrumentos();
        return response()->json($instrumentos, 200);
    }

    public function exibir(int $id)
    {
        $instrumentoService = new InstrumentoService();
        $instrumento = $instrumentoService->buscarInstrumento($id);
        return response()->json($instrumento, 200);
    }

    public function criar(Request $request)
    {
        $instrumentoService = new InstrumentoService();
        $instrumento = $instrumentoService->criarInstrumento($request->all());
        return response()->json($instrumento, 201);
    }

    public function atualizar(Request $request, int $id)
    {
        $instrumentoService = new InstrumentoService();
        $instrumento = $instrumentoService->atualizarInstrumento($request->all(), $id);
        return response()->json($instrumento, 200);
    }

    public function deletar(int $id)
    {
        $instrumentoService = new InstrumentoService();
        $instrumento = $instrumentoService->deletarInstrumento($id);
        return response()->json($instrumento, 200);
    }
}