<?php
namespace APP\models;

class calculadora{

    private $pdo;
    
    public function __construct(\PDO $conn){
        $this->pdo = $conn;
        
    }

    public function calcular($formCompleto){
           
        $eletricidade = $formCompleto['eletricidade'];
        $butijoes = $formCompleto['butijoes'];
        $cigarro = $formCompleto['cigarro'];

        $combustivel = $formCompleto['combustivel'];
        $kmdia = $formCompleto['kmdia'];

        $kmdiapub = $formCompleto['kmdiapub'];

        //terminar a logica, controller funcionando
    
    }
    
}
