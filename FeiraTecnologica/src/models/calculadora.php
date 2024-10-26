<?php
namespace APP\models;

session_start();

if (isset($_SESSION['form1_data'], $_SESSION['form2_data'], $_SESSION['form3_data'])) {
    
    $todos_dados = array_merge($_SESSION['form1_data'], $_SESSION['form2_data'], $_SESSION['form3_data']);

    
   
    
    session_unset();
    session_destroy();
} 

class calculadora{

    private $pdo;
    
    public function __construct(\PDO $conn){
        $this->pdo = $conn;
        
    }

    //Arrumar o codigo pra inserção no banco de dados
    public function calcular($formCompleto){
           
        $eletricidade = $formCompleto['eletricidade'];
        $butijoes = $formCompleto['butijoes'];
        $cigarro = $formCompleto['cigarro'];

        $combustivel = $formCompleto['combustivel'];
        $kmdia = $formCompleto['kmdia'];

        $kmdiapub = $formCompleto['kmdiapub'];

        echo($eletricidade . " / " . $butijoes . " / " . $cigarro . " / " . $combustivel . " / " . $kmdia . " / " .$kmdiapub);
    
    }
}