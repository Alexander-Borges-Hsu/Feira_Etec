<?php
include('./vendor/autoload.php');

use APP\models\calculadora;
use APP\persistence\ConnectionFactory;

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
//Campo pra lógica da calculadora
if($controllerKey == "CCL"){
    session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cigarro'])) {
        $_SESSION['form1_data'] = $_POST; 
        header("Location: ./src/views/Pages/form2.php"); 
        exit;
    } elseif (isset($_POST['kmdia'])) {
        $_SESSION['form2_data'] = $_POST;
        header("Location: ./src/views/Pages/form3.php");
        exit;
    } elseif (isset($_POST['kmdiapub'])) {
        $_SESSION['form3_data'] = $_POST;
    }
}


if (isset($_SESSION['form1_data'], $_SESSION['form2_data'], $_SESSION['form3_data'])) {
    
    $todos_dados = array_merge($_SESSION['form1_data'], $_SESSION['form2_data'], $_SESSION['form3_data']);
    $a = new calculadora($conn);
    $a->calcular($todos_dados);

    session_unset();
    session_destroy();
} 
}

//Rota pra troca de página
if($controllerKey == "RDCT"){
    $controllerRequest = new APP\controller\redirectController;
    $controllerRequest->redirect($controllerAction);
}