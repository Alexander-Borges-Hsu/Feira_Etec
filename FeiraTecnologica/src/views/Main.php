<?php

    include('../../vendor/autoload.php');

    use APP\models\Usuario;
    use APP\persistence\ConnectionFactory;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['usuario'];
        $password = $_POST['senha'];

        header("Location: Pages/tela_inicial.html");
        exit();
    }    

    //As variáveis acima serão usadas para Select, e as variáveis abaixas serão usadas para Insert

    if($_SERVER["REQUEST_METHOD"] == "POST"){    
        $NewUsername = $_POST['newusuario'];
        $NewPassword = $_POST['newsenha'];
        $ConfirmPassword = $_POST['newsenhaC'];
        $NewEmail = $_POST['newemail'];

        header("Location: ../../index.html");
        
        }
    
    $sqlInsert = 'INSERT INTO tbnew_usuario (newusuario, newsenha, newemail ) VALUES ("' . $NewUsername . '", "' . $NewPassword . '", "' . $NewEmail .'")';

    $conn = ConnectionFactory::getConnection();
    
    if($NewPassword == $ConfirmPassword){
        $conn->exec($sqlInsert);
    }
?>