<?php
    include('../../vendor/autoload.php');

    use APP\models\Usuario;
    use APP\persistence\ConnectionFactory;

    //Variáveis para Insert

    //Redireciona o usuário
    if($_SERVER["REQUEST_METHOD"] == "POST"){    
        $NewUsername = $_POST['newusuario'];
        $NewPassword = $_POST['newsenha'];
        $ConfirmPassword = $_POST['newsenhaC'];
        $NewEmail = $_POST['newemail'];

        header("Location: ../../index.html");
        
        }
    //Insere os dados no banco    
    $sqlInsert = 'INSERT INTO tbnew_usuario (newusuario, newsenha, newemail ) VALUES ("' . $NewUsername . '", "' . $NewPassword . '", "' . $NewEmail .'")';
    
    //Cria a conexão com o banco
    $conn = ConnectionFactory::getConnection();
    $conn->exec($sqlInsert);