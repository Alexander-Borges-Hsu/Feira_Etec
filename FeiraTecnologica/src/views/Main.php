<?php

    include('../../vendor/autoload.php');

    use APP\models\Usuario;
    use APP\persistence\ConnectionFactory;

    //Variáveis para select

    //Redireciona o usuario
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['usuario'];
        $password = $_POST['senha'];

        //header("Location: Pages/tela_inicial.html");
    }    
    
    $sqlSelect = 'SELECT idUsuario FROM tbnew_usuario WHERE newusuario = "' . $username .'"';

    //Efetua a conexão com o banco
    $conn = ConnectionFactory::getConnection();
    $conn->exec($sqlSelect); 

    //terminar o select
    