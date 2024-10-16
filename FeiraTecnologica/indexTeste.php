<?php
    include('./src/controller/APP_controller.php');
    //Usar o MainCadastro caso o controller não funcione
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src\views\imagens\imagem.png">
    <title>VerdeCalc</title>

    <link rel="stylesheet" href="./src/views/Style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <script src="./src/views/Script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body class="index"> 
    <div class="sp">
        <span class="Vd"><p>Verde</span><span class="Ca">Calc</P></span>
    </div>
    <div class="content">
        <img src="./src/views/imagens/imagem.png" class="img-fluid" id="ic">
    </div>
    <div class="dark-overlay">
        <!-- Formulário do login -->
        <form method="POST" action="index.php?r=logUser&m=tela_inicial">
            <main class="login-form">
                <div class="col-md-6 mx-auto p-0">
                    <div class="card">
            <div class="login-box">
                <div class="login-snip">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Cadastro</label>
                    <div class="login-space">
                        <div class="login">
                            <div class="group">
                                <label for="user" class="label">Usuário</label>
                                <input id="user" type="text" class="input"  placeholder="Usuário" required name="usuario"> 
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Senha</label>
                                <input id="pass" type="password" class="input" data-type="password" placeholder="Senha" required name="senha">
                            </div>
                                <p id="loginError" style="color: red; display: none;">Usuario ou senha errado! </p>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label for="check"><span class="icon"></span><span class="lembre">Lembre de mim</span></label>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Logar">
                            </div>
                            <div class="hr"></div>
                            <div class="foot">
                                <a href="#" class="esqueci">Esqueci a senha</a>
                            </div>
                        </div>
                    </form>       
                    <!-- Formulário do cadastro              -->
                    <form method="POST" action="index.php?r=cadUser">
                        <div class="sign-up-form">
                            <div class="group">
                                <label for="user" class="label">Usuário</label>
                                <input id="user" type="text" class="input" placeholder="Crie seu Usuário" required name="newusuario">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Senha</label>
                                <input id="pass" type="password" class="input" data-type="password" placeholder="Crie sua senha" required name="newsenha">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Confirmar Senha</label>
                                <input id="pass" type="password" class="input" data-type="password" placeholder="Confirme sua senha" required name="newsenhaC">
                                <p id="errorMessage" style="color: red; display: none;">As senhas devem ser iguais!</p> <!-- Mensagem de erro -->
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Email</label>
                                <input id="pass" type="email" class="input" placeholder="Coloque seu e-mail" required name="newemail">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Cadastrar" disabled id="botaoenviar">
                                <p class="success" id="mensagemSucesso"></p>
                            </div>
                            <div class="hr"></div>
                            
                        </div>
                    </div>
                </div>
            </div>   
            </div>
            </div>
            </div>
        </form>
    </main>
</div>
</body>
</html>