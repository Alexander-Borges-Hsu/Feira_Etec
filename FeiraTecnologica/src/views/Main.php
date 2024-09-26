<?php

    include('../../vendor/autoload.php');

    use APP\models\Usuario;
    use APP\persistence\ConnectionFactory;

    $username = $_POST['usuario'];
    $password = $_POST['senha'];

    $sqlInsert = 'INSERT INTO usuario (usuario, senha) VALUES ("' . $username . '", "' . $password . '")';

    $conn = ConnectionFactory::getConnection();
    
    $conn->exec($sqlInsert);
    
?>