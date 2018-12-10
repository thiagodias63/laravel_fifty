<?php

namespace App;

use SoapClient;

class ClienteSoap
{
    private $endereco;
    private $client; 
    public function __construct($endereco)
    {
        $this->endereco = $endereco;
        $this->client = new SoapClient($this->endereco . '?wsdl');
    }
    public function executar($funcao, $parametros = [])
    {
        try{
            $argumentos= [
                'user' => 'thiago.dias',
                'password' => 'Krab63@c',
                'encryption' => '0',
                'parameters' => $parametros
            ];
            
            $opcoes = ['location' => $this->endereco];
            $resultado = $this->client->__soapCall($funcao, $argumentos, $opcoes);

            return $resultado;
            
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }
}
