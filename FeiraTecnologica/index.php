<?php
include('./src/controller/APP_controller.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src\views\imagens\imagem.png">
    <title>VerdeCalc</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./src/views/Style/style.css">
</head>
<body>    
    <div class="container" id="container">
        <div class="formulario-container registro">
            <form>
                <h1>Crie sua conta</h1>
                <span>Use seu email para se registrar</span>
                <input type="text" placeholder="Nome">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Senha">
                <button>Registrar</button>
            </form>
        </div>
        <div class="formulario-container logar">
            <form>
                <h1>Entre com a sua conta</h1>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Senha">
                <a href="#">Esqueceu a senha?</a>
                <button style="margin-left: 10px;">Entrar</button>
            </form>
        </div>
    <div class="container-alternativo">
        <div class="alternativo">
            <div class="painel-alternativo painel-esquerdo">
                <h1>Bem vindo de volta!</h1>
                <p>Entre no nosso site e descubra o quanto de Carbono você emite na atmosfera.</p>
                <button class="hidden" id="login">Entrar</button>
            </div>
            <div class="painel-alternativo painel-direito">
                <h1>Bem vindo!</h1>
                <p>Se registre no nosso site e descubra o quanto de Carbono você emite na atmosfera.</p>
                <button class="hidden" id="register">Registrar</button>
            </div>
        </div>
    </div>


<script src="./src/views/Script/script_index.js"></script>
</body>
</html>


