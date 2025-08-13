<?php

namespace App\Http\Service;

use App\Models\Instrumento;

class InstrumentoService
{
    public function criarInstrumento(array $dados)
    {
        $instrumento = Instrumento::create($dados);
        return $instrumento;
    }

    public function buscarInstrumento(int $id)
    {
        $instrumento = Instrumento::with('musico')->find($id);
        if (!$instrumento) {
            throw new \Exception('Instrumento não encontrado');
        }
        return $instrumento;
    }

    public function buscarTodosInstrumentos()
    {
        return Instrumento::with('musico')->get();
    }

    public function atualizarInstrumento(array $dados, int $id)
    {
        $instrumento = Instrumento::find($id);
        $instrumento->update($dados);
        return $instrumento;
    }

    public function deletarInstrumento(int $id)
    {
        $instrumento = Instrumento::find($id);
        $instrumento->delete();
        return $instrumento;
    }
}