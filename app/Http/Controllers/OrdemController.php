<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Produtos;

class OrdemController extends Controller
{

    public function cadastrar(Request $request)
    {
        return [
            'status' => true,
            
        ];
    }
    
}