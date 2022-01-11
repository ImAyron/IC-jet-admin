<?php

namespace App\Http\Controllers;

use App\Models\operation;

use Illuminate\Http\Request;

class operationController extends Controller
{
    public function addOperation(Request $request) {

        operation::create($request->all());
     

        // Retornar
        return [$request->token, $request->operations,
        $request->antenna];

    }
    public function index(){
        
    }
}