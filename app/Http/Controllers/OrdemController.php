<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Produtos;

class OrdemController extends Controller
{
    private $ordens = [
        'codigo' => 1,
        'cliente' => 'Decio Freire Advocacia',
        'servico' => 'Treinamento',
        'horas' => '120',
        'prazo' => '01/01/2019',
        'completada' => true
    ];

    
    public function listar()
    {
        $this->ordens[] = [
            'codigo' => 2,
            'cliente' => 'AP Ponto',
            'servico' => 'Consultoria',
            'horas' => '180',
            'prazo' => '15/01/2019',
            'completada' => false
        ];
        
        $this->ordens[] = [
            'codigo' => 3,
            'cliente' => 'Lab. Geraldo Lustosa',
            'servico' => 'Treinamento',
            'horas' => '240',
            'prazo' => '20/10/2018',
            'completada' => true
        ];
        
        $this->ordens[] = [
            'codigo' => 2,
            'cliente' => 'Kutner',
            'servico' => 'Implatação',
            'horas' => '600',
            'prazo' => '11/12/2018',
            'completada' => false
        ];
        
        return [
            'status' => true,
            'lista' => $this->ordens
        ];
    }

    public function cadastrar(Request $request)
    {
        $data = $request->all();

        $codigo = count($this->ordens);
        
        $odem = [
            'codigo' => $codigo,
            'cliente' => $data['cliente'],
            'servico' => $data['servico'],
            'horas' => $data['horas'],
            'prazo' => $data['prazo'],
            'completada' => false
        ];
        $this->ordens[] = $odem;

        return [ 'status' => true ];
    }
    
}