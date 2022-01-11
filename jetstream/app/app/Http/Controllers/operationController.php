<?php

namespace App\Http\Controllers;

use App\Models\Operacao;

use Illuminate\Http\Request;

class operationController extends Controller
{
    public function addOperation(Request $request) {

        // Inserir/atualizar dados

        // Retornar
        return [$request->token, $request->operation,
        $request->antenna];

    }
}