<?php
namespace APP\models;
session_start();
class calculadora{

    private $pdo;
    
    public function __construct(\PDO $conn){
        $this->pdo = $conn;
        
    }
    //Arrumar o codigo pra inserção no banco de dados
    public function calcular($formCompleto){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            if (isset($_POST['eletricidade'])) {
                $eletricidade = $_SESSION['eletricidade'] = $_POST['eletricidade'];
                $butijoes = $_SESSION['butijoes'] = $_POST['butijoes'];
                $cigarro = $_SESSION['cigarro'] = $_POST['cigarro'];
            }
                    
            if (isset($_POST['combustivel'])) {
                $combustivel = $_SESSION['combustivel'] = $_POST['combustivel'];
                $kmdia = $_SESSION['kmdia'] = $_POST['kmdia'];
            }

            if (isset($_POST['kmdiapub'])) {
                $kmdiapub = $_SESSION['kmdiapub'] = $_POST['kmdiapub'];

            }
        }

        echo($eletricidade . " / " . $butijoes . " / " . $cigarro . " / " . $combustivel . " / " . $kmdia . " / " .$kmdiapub);
        
    }
   

}