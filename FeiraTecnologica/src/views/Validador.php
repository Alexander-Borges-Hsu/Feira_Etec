<?php

include('./vendor/autoload.php');

// Conexão com o banco de dados MySQL
use APP\persistence\ConnectionFactory;
$conn = ConnectionFactory::getConnection(); 


$nome_usuario = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_usuario = $_POST["newusuario"];
    
    // Verificar se o nome de usuário já existe
    $stmt = $conn->prepare("SELECT * FROM tbnew_usuarios WHERE newusuario = ?");
    $stmt->bind_param("s", $nome_usuario);
    $stmt->exec();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $erro_nome_usuario = "Esse nome de usuário já está em uso.";
    } else {
        // Lógica de inserção no banco de dados aqui (caso não haja erro)
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO usuarios (nome_usuario, senha) VALUES (?, ?)");
        $stmt->bind_param("ss", $nome_usuario, $senha);
        $stmt->execute();
        echo "Usuário registrado com sucesso!";
    }

    
}



