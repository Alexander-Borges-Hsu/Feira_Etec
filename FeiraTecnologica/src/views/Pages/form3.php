<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VerdeCalc</title>
    <link rel="icon" href=".\..\imagens\imagem.png">
    
    <link rel="stylesheet" href="./../Style/styleform2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="./../Script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </head>
  <body>
    <!-- Barra de Navegação                  -->
    <?php 
      include('../AppView/NavBar.php');
    ?>
    <main>
      <h1 class="titulo">Transportes Individuias</h1>
      <section class="transporte-individual">
        <h2>Escolha seu meio de Transporte</h2>
        <div class="escolha-veiculo">
          <button id="carro-btn">
            <img src="./../imagens/onibus.png" alt="Carro">
            <p>Onibus</p>
          </button>
          <button id="moto-btn">
            <img src="./../imagens/metro.png" alt="Moto">
            <p>metro</p>
          </button>
        </div>
              
        <form id="formulario" class="informacoes-complementares">
          <label for="kms">Kms Rodados:</label>
          <input type="number" id="kms" name="kms">
          <label for="dias">Dias usados:</label>
          <input type="number" id="dias" name="dias">
          <button type="submit">Próximo</button>
        </form>
      </section>
    </main>
    
  </body>
</html>
