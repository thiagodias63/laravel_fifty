<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Produtos;

class ResultadosController extends Controller
{
    public function getProdutos()
    {
        return [
            [
                'codigo' => '12',
                'nome' => 'ALalalal',
                'receita' => 1254
            ],
            [
                'codigo' => '12',
                'nome' => 'ALalalal',
                'receita' => 1254
            ]
        ];
    }
    
    public function getServicos()
    {
        return [];
    }

    public function getClientes()
    {
        return [
            [
                'nome' => 'Cliente',
                'atendimentos' => '100',
                'receita' => '150'
            ]
        ];
    }

    public function getMensal()
    {
        return [
            [
                'ano' => '2010',
                'mes' => 'Cliente',
                'receita' => '100',
                'vendas' => '150'
            ]
        ];
    }
}