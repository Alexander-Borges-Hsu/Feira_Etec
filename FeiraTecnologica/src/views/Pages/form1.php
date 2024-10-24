<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=".\..\imagens\imagem.png">
    <title>VerdeCalc</title>
    
    <link rel="stylesheet" href="./../Style/style.css">
    <link rel="stylesheet" href="./../Style/styleform1.css">

    <script src="./../Script/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <!-- Barra de Navegação                  -->
  <?php 
    include('../AppView/NavBar.php');
  ?>
  <main>
  
  <!-- Formulário consumo eletrecidade              -->
    <h1 class="ce">Consumo de Eletrecidade</h1>
    <section class="formulario">      
      <section class="consumo-eletrecidade">
        <h2>Insira seu consumo mensal de eletricidade em Reais</h2>
        <form id="formulario" class="informacoes-complementares" action = "../../../index.php?k=PDO&r=calculadora&m=calcular" method="POST">
          <label for="moneyInput">Digite seu consumo mensal de energia:</label>
          <input type="text" id="moneyInput" placeholder="R$" style="width: 365px; height: 50px; border-radius: 10px;" required name="eletricidade">
      </section>

      <h1 class="gas">Consumo de Gás Natural</h1>
      <section class="gas-natural">
        <h2>Quantos butijões de gás de cozinha você utiliza por mês?</h2>
        <div class="formgas">
          <label for="gasInput">Digite seu consumo mensal de gás:</label>
          <input type="number" id="gasInput" placeholder="Digite um número" min="0" step="1" style="width: 365px; height: 50px; border-radius: 10px;" required name="butijoes">
        </div>
      </section>

      <h1 class="fumo">Consumo Próprio</h1>
      <section class="consumo-proprio">
        <h2>Caso fume, insira quantos maços de cigarro você consome por semana</h2>
        <div class="formproprio">
          <label for="smokeInput">Digite seu consumo semanal:</label>
          <input type="number" id="smokeInput" placeholder="Digite um número" min="0" step="1" style="width: 365px; height: 50px; border-radius: 10px;" required name="cigarro">
        </div>
      </section>

      <input class="btn btn-primary" type="submit" value="Enviar" style="width: 100px; text-align: center; margin-left: 1300px; z-index: 10; margin-top: 5px;">
      </form>
    </section>
  </main>
        
         
</body>
</html>