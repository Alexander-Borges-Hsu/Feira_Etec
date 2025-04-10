<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=".\..\imagens\imagem.png">
    <title>VerdeCalc</title>

    <link rel="stylesheet" href="./../Style/style_navbar.css">

    <link rel="stylesheet" href="./../Style/form1.css">

    <script src="./../Script/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="header-form">
        <h1><span class="verde">Verde</span><span class="calc">Calc</span></h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#" class="busque">Calculadora</a></li>
                <li><a href="#">Notícias</a></li>
            </ul>
        </nav>
        <div class="usuario">
            <div class="icon"></div>
            <span>Olá, Usuário</span>
        </div>
    </header>
    <?php
    //include('../AppView/Aside.php');
    ?>
    <main>
    
        <section class="form-container">
            <h2 class="titulo">Olá empreendedor(a), antes de começarmos, insira algumas informações empresariais.</h2>
            <form>
                <label>CNPJ da empresa</label>
                <input type="text" placeholder="CNPJ">
                <br>
                <br>
                <label>Nome completo da empresa</label>
                <input type="text" placeholder="Nome da empresa">
                <br>
                <br>
                <label>Endereço da sede</label>
                <input type="text" placeholder="Endereço da sede">
                <br>
                <br>
                <label>Ramo de atividade principal</label>
                <input type="text" placeholder="Ramo da sua empresa">
                <br>
                <br>
                <label>Quantos funcionários a empresa possui?</label>
                <input type="text" placeholder="Quantos funcionários possui">
                
                <h3 class="subtitulo">Dados Operacionais e Produção</h3>
                <label>A empresa realiza monitoramento de emissões de CO₂?</label>
                <div class="buttons">
                    <input type="radio" id="monitoramento-sim" name="monitoramento" value="sim">
                    <label for="monitoramento-sim">Sim</label>
                    <input type="radio" id="monitoramento-nao" name="monitoramento" value="nao">
                    <label for="monitoramento-nao">Não</label>
                </div>

                <label>Quais fontes de emissão sua empresa possui?</label>
                <div class="buttons">
                <input type="checkbox" id="industria" name="fontes[]" value="Industria">
                <label for="industria">Indústria</label>

                <input type="checkbox" id="transporte" name="fontes[]" value="Transporte">
                <label for="transporte">Transporte</label>

                <input type="checkbox" id="energias" name="fontes[]" value="Energias">
                <label for="energias">Energias</label>

                <input type="checkbox" id="residuos" name="fontes[]" value="Resíduos">
                <label for="residuos">Resíduos</label>
                </div>

                <label>A empresa possui certificações ambientais?</label>
                <div class="buttons">
                    <input type="radio" id="cert-sim" name="certificacoes" value="sim">
                    <label for="cert-sim">Sim</label>
                    <input type="radio" id="cert-nao" name="certificacoes" value="nao">
                    <label for="cert-nao">Não</label>
                </div>

                <h3 class="subtitulo">Gestão de Sustentabilidade</h3>
                <label>A empresa já implementou ações para redução de carbono?</label>
                <div class="buttons">
                    <input type="radio" id="reduz-sim" name="reducao_carbono" value="sim">
                    <label for="reduz-sim">Sim</label>
                    <input type="radio" id="reduz-nao" name="reducao_carbono" value="nao">
                    <label for="reduz-nao">Não</label>
                </div>

                <label>A empresa realiza o cálculo da emissão de carbono?</label>
                <div class="buttons">
                    <input type="radio" id="pegada-sim" name="pegada_carbono" value="sim">
                    <label for="pegada-sim">Sim</label>
                    <input type="radio" id="pegada-nao" name="pegada_carbono" value="nao">
                    <label for="pegada-nao">Não</label>
                </div>

                <label>Tipo de matriz energética principal?</label>
                <div class="buttons">
                    <input type="radio" id="eletrica" name="matriz_energetica" value="Eletrica">
                    <label for="eletrica">Elétrica</label>
                    <input type="radio" id="solar" name="matriz_energetica" value="Solar">
                    <label for="solar">Solar</label>
                    <input type="radio" id="eolica" name="matriz_energetica" value="Eólica">
                    <label for="eolica">Eólica</label>
                    <input type="radio" id="combustivel_fossil" name="matriz_energetica" value="Combustivel_Fossil">
                    <label for="combustivel_fossil">Combustível Fóssil</label>
                </div>
                <br>
                <input type="submit" value="Registrar" id="registrar" class="botao-input">
            </form>
        </section>
    </main>
    <?php
    include('../AppView/Footer.php');
    ?>
    <script src="../Script/script_aside.js"></script>
</body>

</html>