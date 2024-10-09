<?php

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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica qual formulário foi enviado
        if (isset($_POST['newusuario'])) {
            // Processa o cadastro
            $NewUsername = $_POST['newusuario'];
            $NewPassword = $_POST['newsenha'];
            $NewEmail = $_POST['newemail'];
    
            $stmt = $conn->prepare("SELECT * FROM tbnew_usuario WHERE newusuario = :nome_usuario");
            $stmt->bindParam(':nome_usuario', $NewUsername);
            $stmt->execute();
    
            if ($stmt->rowCount() > 0) {
                echo('<script>alert("Nome de usuário já está em uso, tente novamente.")</script>');
            } else {
                // Lógica de inserção no banco de dados
                $senha = password_hash($NewPassword, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("INSERT INTO tbnew_usuario (newusuario, newsenha, newemail) VALUES (:nome_usuario, :senha, :email)");
                $stmt->bindParam(':nome_usuario', $NewUsername);
                $stmt->bindParam(':senha', $senha);
                $stmt->bindParam(':email', $NewEmail);
                $stmt->execute();
    
                echo('<script>alert("Cadastro realizado com sucesso!")</script>');
            }
        } else if (isset($_POST['usuario'])) {
            
            $username = $_POST['usuario'];
            $password = $_POST['senha'];
            
            // Consultar o banco de dados para verificar o usuário
            $stmt = $conn->prepare("SELECT * FROM tbnew_usuario WHERE newusuario = :nome_usuario");
            $stmt->bindParam(':nome_usuario', $username);
            $stmt->execute();
    
            // Verificar se o usuário existe
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                // Verificar a senha
                
                if (password_verify($password, $user['newsenha'])) {
                    // Login bem-sucedido 
                    
                    header("Location: ./src/views/Pages/tela_inicial.html");
                     // Para garantir que o script pare após o redirecionamento
                     exit;
                } else {
                    echo '<script>
                             alert("Usuario ou senha errados!");
                         </script>';
                }
            } else {
                echo '<script>
                        alert("Usuario ou senha errados!");
                    </script>';
            }

        }

    }
    //Até o verify está dando certo
   

    
    