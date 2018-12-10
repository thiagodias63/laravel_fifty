<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Produtos;

class OrdemController extends Controller
{
    private $ordens = [
        [
            'codigo' => 1,
            'cliente' => 'Decio Freire Advocacia',
            'servico' => 'Treinamento',
            'horas' => '120',
            'prazo' => '01/01/2019',
            'completada' => true
        ],
        [
            'codigo' => 2,
            'cliente' => 'AP Ponto',
            'servico' => 'Consultoria',
            'horas' => '180',
            'prazo' => '15/01/2019',
            'completada' => false
        ],
        [
            'codigo' => 3,
            'cliente' => 'Lab. Geraldo Lustosa',
            'servico' => 'Treinamento',
            'horas' => '240',
            'prazo' => '20/10/2018',
            'completada' => true
        ],
        [
            'codigo' => 2,
            'cliente' => 'Kutner',
            'servico' => 'Implatação',
            'horas' => '600',
            'prazo' => '11/12/2018',
            'completada' => false
        ]
    ];

    
    public function listar()
    {
        return [
            'status' => true,
            'lista' => $this->ordens
        ];
    }

    public function cadastrar(Request $request)
    {
        $data = $request->all();

        $codigo = count($this->ordens);
        
        $ordem = [
            'codigo' => $codigo,
            'cliente' => $data['cliente'],
            'servico' => $data['servico'],
            'horas' => $data['horas'],
            'prazo' => $data['prazo'],
            'completada' => false
        ];
        $this->ordens[] = $ordem;

        return [ 'status' => true, 'lista' => $this->ordens ];
    }
    
    public function finalizar($id)
    {
        // $data = $request->all();
        $this->ordens[$id]['completada'] = true;
        return [ 'status' => true, 'lista' => $this->ordens ];
    }

    public function completadas()
    {
        $retorno = [];
        foreach($this->ordens as $ordem)
        {
            if($ordem['completada'])
                $retorno[] = $ordem;
        }

        return [
            'status' => true,
            'lista' => $retorno
        ];
    }

    public function pendetes()
    {
        $retorno = [];
        foreach($this->ordens as $ordem)
        {
            if(!$ordem['completada'])
                $retorno[] = $ordem;
        }

        return [
            'status' => true,
            'lista' => $retorno
        ];
    }
    
}