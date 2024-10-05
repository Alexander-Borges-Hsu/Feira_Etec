<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include('./vendor/autoload.php');

    use APP\models\Usuario;
    use APP\persistence\ConnectionFactory;

    $NewUsername = '';
    $NewPassword = '';
    $NewEmail = '';
    $erro_nome_usuario = '';
    //Cria a conexão com o banco
    $conn = ConnectionFactory::getConnection();

    //Variáveis para Insert
    if($_SERVER["REQUEST_METHOD"] == "POST"){    
        $NewUsername = $_POST['newusuario'];
        $NewPassword = $_POST['newsenha'];
        $NewEmail = $_POST['newemail'];

        $stmt = $conn->prepare("SELECT * FROM tbnew_usuario WHERE newusuario = :nome_usuario");
        $stmt->bindParam(':nome_usuario', $NewUsername);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo('<script>alert("Nome de usuario já esta em uso, tente novamente")</script>');
        } else {
            // Lógica de inserção no banco de dados aqui (caso não haja erro)

            $senha = password_hash($NewPassword, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO tbnew_usuario (newusuario, newsenha, newemail) VALUES (:nome_usuario, :senha, :email)");
            $stmt->bindParam(':nome_usuario', $NewUsername);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':email', $NewEmail);
            $stmt->execute();
        }}
   

    
    