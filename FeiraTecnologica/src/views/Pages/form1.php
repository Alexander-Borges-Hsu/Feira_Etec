<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=".\..\imagens\imagem.png">
    <title>VerdeCalc</title>
  
    <link rel="stylesheet" href="./../Style/style.css">
    <link rel="stylesheet" href="./../Style/teste.css">
    

    <script src="./../Script/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php 
  include('../AppView/NavBar.php');
?>
  <main class="container">
    <h1 class="text-center mb-4">Consumo de Energia e Recursos</h1>
    
    <div class="row justify-content-center">
      <section class="col-12 col-md-6 col-lg-4 consumo">
        <h2>Consumo de Eletricidade</h2>
        <form action="../../../index.php" method="POST">
        <input type="text" name="k" value="CCL" style="display: none;">
          <label for="moneyInput">Digite seu consumo mensal de energia:</label>
          <input type="text" id="moneyInput" placeholder="R$" required name="eletricidade">
      </section>
      
      <section class="col-12 col-md-6 col-lg-4 consumo">
        <h2>Consumo de Gás Natural</h2>
        <label for="gasInput">Quantos botijões de gás você utiliza por mês?</label>
        <input type="number" id="gasInput" placeholder="Digite um número" min="0" step="1" required name="butijoes">
      </section>
      
      <section class="col-12 col-md-6 col-lg-4 consumo">
        <h2>Consumo Próprio</h2>
        <label for="smokeInput">Quantos maços de cigarro você consome por semana?</label>
        <input type="number" id="smokeInput" placeholder="Digite um número" min="0" step="1" required name="cigarro">
      </section>
    </div>
    
    <div class="text-center mt-3">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
  </main>
  <?php
    include('../AppView/Footer.php');
    ?>
</body>
</html>
