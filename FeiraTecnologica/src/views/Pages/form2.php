<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VerdeCalc</title>

  <link rel="stylesheet" href="./../Style/style_navbar.css">

  <link rel="icon" href=".\..\imagens\imagem.png">

  <link rel="stylesheet" href="./../Style/form2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</head>

<body>
  <?php
  include('../AppView/NavBar.php');
  ?>

  <main>
    <h1 class="titulo">Transportes Individuias</h1>

    <section class="transporte-individual">
      <h2>Escolha seu meio de Transporte</h2>

      <div class="escolha-veiculo">

        <!--Botão do carro-->
        <button id="carro-btn">
          <img src="./../imagens/carro2.jpg" alt="Carro">
          <p>Carro</p>
        </button>

        <!-- Botão Ambos -->
        <button id="ambos-btn">
          <img src="./../imagens/ambos.png" alt="Ambos">
          <p>Ambos</p>
        </button>

        <!--Botão da Moto-->
        <button id="moto-btn">
          <img src="./../imagens/moto-png-certa.png" alt="Moto">
          <p>Moto</p>
        </button>
      </div>

      <!--O form abaixo diz sobre os espaços para preencher abaixo dos botoes carro e moto-->

      <!--Campo onde informa, qual tipo de combustivel será usado trazendo tres opções Gasolina, Gás Natural, Diesel-->

      <form id="formulario" class="informacoes-complementares" action="../../../index.php" method="POST">
        <input type="text" name="k" value="CCL" style="display: none;">
        <label for="combustivel">Combustível utilizado:</label>
        <select id="combustivel" name="combustivel" required placeholder="a">
          <option value="gasolina">Gasolina</option>
          <option value="gas_natural">Gás Natural</option>
          <option value="diesel">Diesel</option>
          <option value="nao-sei">Não sei informar</option>
        </select>

        <!--Campo onde informa, quantos kms o user rodou por dia-->

        <label for="kms">Kms Rodados Por Dia (Digite 0 caso não utilize):</label>
        <input type="number" id="kms" name="kmdia" required>

        <!--Dar proximo, e ir a proximo formulario-->
        <button type="submit">Próximo</button>

      </form>
    </section>
  </main>

  <?php
  include('../AppView/Footer.php');
  ?>




  <script src="./../Script/script.js"></script>

</body>

</html>