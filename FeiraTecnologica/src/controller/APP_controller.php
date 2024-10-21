<?php
include('./vendor/autoload.php');

use APP\persistence\ConnectionFactory;
use  APP\models\cadUser;
use APP\models\logUser;

$conn = ConnectionFactory::getConnection();

$controllerOption = $_REQUEST['r'] ?? 'home';
$controllerAction = $_REQUEST['m'] ?? 'index';
$controllerKey = $_REQUEST['k'] ?? '';

//Rota do cadastro e login
if($controllerKey == "PDO"){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $className = "APP\\models\\" . $controllerOption;
        $a = new $className($conn);        
        $a->$controllerAction($_POST);

    }
}

//Rota pra troca de página
if($controllerKey == "RDCT"){
    $controllerRequest = new APP\controller\redirectController;
    $controllerRequest->redirect($controllerAction);
}