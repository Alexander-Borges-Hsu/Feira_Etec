<?php
include('./vendor/autoload.php');

use APP\persistence\ConnectionFactory;
use  APP\models\cadUser;
use APP\models\logUser;

$conn = ConnectionFactory::getConnection();

$rota = $_REQUEST['r'] ?? 'home';
$action = $_REQUEST['m'] ?? 'index';

//Rota do cadastro e login
if($rota == 'cadUser'){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $NewUsername = $_POST['newusuario'];
        $NewPassword = trim($_POST['newsenha']);
        $NewEmail = $_POST['newemail'];

        $a = new cadUser($conn);
        $a->create($NewUsername, $NewPassword, $NewEmail);

    }
}else if($rota == 'logUser'){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['usuario'];
        $password = trim($_POST['senha']);

        $b = new logUser($conn);
        $b->verify($username, $password);

}}

//Rota pra troca de página
if($rota == 'tela_inicial.php'){
    header('Location: ./src/views/Pages/tela_inicial.php?r=tela_inicial.php');
}else if($rota == 'form1.php'){
    header('Location: ./src/views/Pages/form1.php?r=form1.php');
}