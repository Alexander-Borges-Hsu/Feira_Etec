<?php
namespace APP\models;

class logUser{

    private $pdo;
    
    public function __construct(\PDO $conn){
        $this->pdo = $conn;
    }

    public function verify($coluneas){
        $this->username = $_POST['usuario'];
        $this->password = trim($_POST['senha']);

        $stmt = $this->pdo->prepare("SELECT * FROM tbnew_usuario WHERE newusuario = :nome_usuario");
        $stmt->bindParam(':nome_usuario', $this->username);
        $stmt->execute();

        // Verificar se o usuário existe
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            // Verificar a senha
            $bdPass = $user['newsenha'];
            
            if (password_verify($this->password, $bdPass)) {
                // Login bem-sucedido                 
                header("Location: ./src/views/Pages/tela_inicial.php");
                 
                
            } else {
                header("Location: src/views/Pages/cadastroErrado.php");
            }
        } else {
            header("Location: src/views/Pages/cadastroErrado.php");
        }
    }

}