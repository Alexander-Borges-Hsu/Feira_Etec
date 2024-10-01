<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src\views\imagens\Mídia-Photoroom.jpg">
    <title>Tela de Login</title>

    <link rel="stylesheet" href="./src/views/style.css">
    <script src="./src/views/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
</head>
<body>
<main class="login-form">
        <form method="POST" action="./src/views/Main.php">
            <h1 class="h3 mb-3 fw-normal text-center"><span class="F">Fazer Login</span></h1>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Usuário" name="usuario">
                <label for="floatingInput">Usuário</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha">
                <label for="floatingPassword">Senha</label>
            </div>
            
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"><span class="F">Lembre de mim</span>
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; Alexander, Etec ZL, 2024</p>
        </form>
    </main>

</body>
</html>