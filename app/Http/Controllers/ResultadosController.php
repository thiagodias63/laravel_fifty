<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Produtos;

class ResultadosController extends Controller
{
    /*
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
    */
    public function getServicos()
    {
        return [
            'status' => true,
            'lista' => [
                [
                    'nome' => 'Instalação',
                    'horas' => '28',
                    'receita' => '3080'
                ],
                [
                    'nome' => 'Consultoria',
                    'horas' => '100',
                    'receita' => '11000'
                ],
                [
                    'nome' => 'Treinamentos',
                    'horas' => '300',
                    'receita' => '33000'
                ],
                
            ]
        ];
    }

    public function getClientes()
    {
        return [
            'status' => true,
            'lista' => [
                [
                    'nome' => 'ABTM',
                    'horas' => '60',
                    'receita' => '6600'
                ],
                [
                    'nome' => 'Real Guindastes',
                    'horas' => '45',
                    'receita' => '4950'
                ],
                [
                    'nome' => 'KNBS',
                    'horas' => '90',
                    'receita' => '9900'
                ],
                [
                    'nome' => 'Kutner',
                    'horas' => '71',
                    'receita' => '7810'
                ],
                [
                    'nome' => 'Paul Wurth',
                    'horas' => '62',
                    'receita' => '6820'
                ],
                [
                    'nome' => 'Lab. Geraldo Lustosa',
                    'horas' => '100',
                    'receita' => '16500'
                ],
            ]
        ];
    }
    /*
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
    */
}