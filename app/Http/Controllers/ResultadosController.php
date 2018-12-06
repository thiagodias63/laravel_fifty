<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Produtos;

class ResultadosController extends Controller
{
    public function getProdutos()
    {
        return [
            'status' => true,
            'lista' => [
                [
                    'codigo' => '12',
                    'nome' => 'Produto 12',
                    'receita' => 599.99,
                    'quantidade' => 30
                ],
                [
                    'codigo' => '13',
                    'nome' => 'Produto 13',
                    'receita' => 199.99,
                    'quantidade' => 45
                ]
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