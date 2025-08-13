<?php

namespace App\Http\Service;

use App\Models\Musico;

class MusicoService
{
    public function criarMusico(array $dados)
    {
        $musico = Musico::create($dados);
        return $musico;
    }

    public function buscarMusico(int $id)
    {
        $musico = Musico::find($id);
        if (!$musico) {
            throw new \Exception('Músico não encontrado');
        }
        return $musico;
    }

    public function buscarTodosMusicos()
    {
        return Musico::all();
    }

    public function atualizarMusico(array $dados, int $id)
    {
        $musico = Musico::find($id);
        $musico->update($dados);
        return $musico;
    }

    public function deletarMusico(int $id)
    {
        $musico = Musico::find($id);
        $musico->delete();
        return $musico;
    }
}