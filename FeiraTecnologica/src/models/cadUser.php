<?php
namespace APP\models;

use APP\models\User;

class cadUser
{

    private $pdo;

    public function __construct(\PDO $conn)
    {
        $this->pdo = $conn;

    }



    private $AllUsers = [];

    public function create($colunas)
    {

        $this->NewUsername = $_POST['newusuario'];
        $this->NewPassword = trim($_POST['newsenha']);
        $this->NewEmail = $_POST['newemail'];

        $user = new User($this->NewUsername, $this->NewPassword, $this->NewEmail);

        $recebeUser = $user->getUsername();
        $recebeSenha = $user->getPassword();
        $recebeEmail = $user->getEmail();

        $stmt = $this->pdo->prepare("SELECT * FROM tbnew_usuario WHERE newusuario = :nome_usuario");
        $stmt->bindParam(':nome_usuario', $recebeUser);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: ../src/views/Pages/cadastroInvalido.php");
        } else {
            $defaultId = "";
            // Lógica de inserção no banco de dados
            $senha = password_hash($recebeSenha, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("INSERT INTO tbnew_usuario (idUsuario, newusuario, newsenha, newemail) VALUES (:idUsuario, :nome_usuario, :senha, :email)");
            $stmt->bindParam(':idUsuario', $defaultId);
            $stmt->bindParam(':nome_usuario', $recebeUser);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':email', $recebeEmail);
            $stmt->execute();
            header("Location: ../src/views/Pages/cadastroCerto.php");
            //VER COMO FUNCIONA OS ECHO PARA O APP CONTROLLER
        }
    }

    public function list()
    {
        return $this->users;
    }


}