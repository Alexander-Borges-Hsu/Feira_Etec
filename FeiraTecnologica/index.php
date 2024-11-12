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

    <!-- Importação da fonte Comfortaa do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Link para o arquivo de estilo CSS externo personalizado -->
    <link rel="stylesheet" href="./src/views/Style/style.css">
    <!-- Importação de scripts do Bootstrap para funcionalidades JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./src/views/Script/script.js"></script>
</head>
<body class="index"> 

    <!-- Container principal responsivo que ocupa toda a altura da tela (vh-100) e centraliza o conteúdo -->
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">

        <!-- Linha principal que contém as colunas para imagem e formulário -->
        <div class="row w-100 mx-auto">

            <!-- Coluna da imagem/logo, visível apenas em telas médias e maiores (d-none d-md-flex) -->
            <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center">
                <!-- Imagem/logo do VerdeCalc -->
                <img src="./src/views/imagens/imagem.png" class="img-fluid" id="ic" alt="Logo VerdeCalc">
            </div>

            <!-- Coluna do formulário de login/cadastro, visível em todas as telas -->
            <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                
                <!-- Card que contém o formulário, com bordas sombreadas e estilização personalizada -->
                <div class="card p-4 shadow-lg text-light w-100" style="max-width: 400px;">
                    
                    <!-- Título VerdeCalc, dividido em duas spans para aplicar cores diferentes em cada parte -->
                    <div class="text-center mb-4">
                        <span class="Vd">Verde</span><span class="Ca">Calc</span>
                    </div>

                    <!-- Abas para alternar entre Login e Cadastro -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <!-- Aba de Login -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">Login</button>
                        </li>
                        <!-- Aba de Cadastro -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-cadastro-tab" data-bs-toggle="pill" data-bs-target="#pills-cadastro" type="button" role="tab" aria-controls="pills-cadastro" aria-selected="false">Cadastro</button>
                        </li>
                    </ul>

                    <!-- Conteúdo das abas (Login e Cadastro) -->
                    <div class="tab-content" id="pills-tabContent">

                        <!-- Conteúdo do formulário de Login -->
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                            <form method="POST" action="index.php?r=logUser&m=verify&k=PDO">
                                <!-- Campo de usuário -->
                                <div class="mb-3">
                                    <label for="user" class="form-label">Usuário</label>
                                    <input id="user" type="text" class="form-control" placeholder="Usuário" required name="usuario">
                                </div>
                                <!-- Campo de senha -->
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Senha</label>
                                    <input id="pass" type="password" class="form-control" placeholder="Senha" required name="senha">
                                </div>
                                <!-- Mensagem de erro, escondida por padrão -->
                                <p id="loginError" class="text-danger" style="display: none;">Usuário ou senha errado!</p>
                                <!-- Checkbox para lembrar do login -->
                                <div class="form-check mb-3">
                                    <input id="check" type="checkbox" class="form-check-input" checked>
                                    <label for="check" class="form-check-label">Lembre de mim</label>
                                </div>
                                <!-- Botão de login -->
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary w-100" value="Logar">
                                </div>
                                <!-- Link para a opção "Esqueci a senha" -->
                                <div class="text-center">
                                    <a href="#" class="text-light">Esqueci a senha</a>
                                </div>
                            </form>
                        </div>

                        <!-- Conteúdo do formulário de Cadastro -->
                        <div class="tab-pane fade" id="pills-cadastro" role="tabpanel" aria-labelledby="pills-cadastro-tab">
                            <form method="POST" action="index.php?r=cadUser&m=create&k=PDO">
                                <!-- Campo para criação de usuário -->
                                <div class="mb-3">
                                    <label for="newuser" class="form-label">Usuário</label>
                                    <input id="newuser" type="text" class="form-control" placeholder="Crie seu Usuário" required name="newusuario">
                                </div>
                                <!-- Campo para criação de senha -->
                                <div class="mb-3">
                                    <label for="newpass" class="form-label">Senha</label>
                                    <input id="newpass" type="password" class="form-control" placeholder="Crie sua senha" required name="newsenha">
                                </div>
                                <!-- Campo para confirmação da senha -->
                                <div class="mb-3">
                                    <label for="confirmpass" class="form-label">Confirmar Senha</label>
                                    <input id="confirmpass" type="password" class="form-control" placeholder="Confirme sua senha" required name="newsenhaC">
                                    <!-- Mensagem de erro para confirmação de senha -->
                                    <p id="errorMessage" class="text-danger" style="display: none;">As senhas devem ser iguais!</p>
                                </div>
                                <!-- Campo para o e-mail -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="email" class="form-control" placeholder="Coloque seu e-mail" required name="newemail">
                                </div>
                                <!-- Botão de cadastro -->
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary w-100" value="Cadastrar" id="botaoenviar">
                                    <!-- Mensagem de sucesso de cadastro -->
                                    <p class="text-success" id="mensagemSucesso"></p>
                                </div>
                            </form>
                        </div>

                    </div> <!-- Fim do conteúdo das abas -->

                </div> <!-- Fim do card -->

            </div> <!-- Fim da coluna do formulário -->

        </div> <!-- Fim da row -->

    </div> <!-- Fim do container principal -->

</body>
</html>
