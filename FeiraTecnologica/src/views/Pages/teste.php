<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VerdeCalc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
 
      h1 {
        text-align: center;
        color: white;
        margin-bottom: 30px
       ;
      }
 
      h2 {
        color: white;
      }
 
      label {
        color: white;
      }
   
      body {
        background-image: url('./../imagens/selvas-plantas.PNG');
      }
 
      header {
        background-color: #1e2f28;
       
      }
 
      main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
      }
 
      .transporte-individual {
        background-color: #292929;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        width: 400px;
        margin-top: 50px;
      }
 
      .escolha-veiculo {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }
 
      button {
        background-color: #333;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 10px;
        cursor: pointer;
      }
 
      button img {
        width: 50px;
        height: 50px;
      }
 
      button p {
        margin-top: 5px;
      }
 
      button.ativo {
        background-color: #00cc66;
      }
 
      form {
        display: flex;
        flex-direction: column;
        gap: 10px;
      }
     
      input[type="number"], select {
        padding: 10px;
        border-radius: 5px;
        border: none;
      }
 
      button[type="submit"]{
        background-color: #00cc66;
        padding: 10px;
        border-radius: 5px;
        color: white;
      }
 
      .navbar {
    background-color: black;
    font-size: 20px;
  }
  .navbar-brand,
  .nav-link {
    color: white !important;
    margin-left: 20px;
  }
  .nav-link:hover {
    color: #d1e7dd !important;
  }
 
      .Vd {
        color: green;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="Vd">Verde</span><span>Calc</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Calculadora CO2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quem somos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Páginas
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Início</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Calculadora CO2</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
 
      <main>
 
        <h1>Transportes Individuias</h1>
        <section class="transporte-individual">
            <h2>Escolha seu meio de Transporte</h2>
            <div class="escolha-veiculo">
                <button id="carro-btn">
                    <img src="./../imagens/carro2.jpg" alt="Carro">
                    <p>Carro</p>
                </button>
                <button id="moto-btn">
                    <img src="./../imagens/moto.png" alt="Moto">
                    <p>Moto</p>
                </button>
            </div>
 
            <form id="formulario" class="informacoes-complementares">
                <label for="combustivel">Combustível utilizado:</label>
               <select id="combustivel" id="combustivel">
                <option value="gasolina">Gasolina</option>
                <option value="gas_natural">Gás Natural</option>
                <option value="diesel">Diesel</option>
               </select>
 
                <label for="kms">Kms Rodados:</label>
                <input type="number" id="kms" name="kms">
 
                <label for="dias">Dias usados:</label>
                <input type="number" id="dias" name="dias">
 
                <button type="submit">Próximo</button>
            </form>
        </section>
    </main>
   
    <script>
 
      const carroBtn = document.getElementById('carro-btn');
 
      const motoBtn = document.getElementById('moto-btn')
 
      let transporteSelecionado = "";
 
      carroBtn.addEventListener('click', function() {
        transporteSelecionado = 'Carro';
        carroBtn.classList.add('ativo');
        motoBtn.classList.remove('ativo')
 
        motoBtn.addEventListener('click', function(){
          transporteSelecionado = 'Moto';
          motoBtn.classList.add('ativo');
          carroBtn.classList.remove('ativo');
        })
      })
      document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault();
   
    const kms = document.getElementById('kms').value;
    const dias = document.getElementById('dias').value;
    const combustivel = document.getElementById('combustivel').checked;
   
    if (kms && dias) {
        alert(`Você rodou ${kms} kms em ${dias} dias. Combustível: ${combustivel ? 'Sim' : 'Não'}.`);
    } else {
        alert('Preencha todos os campos.');
    }
});
    </script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>