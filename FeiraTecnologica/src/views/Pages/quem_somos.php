<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href=".\..\imagens\imagem.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Style/styleSomos.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    include('../AppView/NavBar.php');
    ?>

<main>
    <center><img class="apresentando" src="imgtopocorreto.jpg" width="90%" height=""></center>
    <section class="topo-do-site">
        <div class="interface">
            <div class="flex">
                <div class="txt-topo-site">
                    <h1>CONHEÇA OS DESENVOLVEDORES E <br>COLABORADORES DA <span>VERDE</span>CALE:</h1><br>
                    <P>Esse site foi desenvolvido por um grupo de alunos da etec zona leste que tem como objetivo, informar,<br> ajudar e conscientizar
                     as pessoas em relação a emissão de dióxido de carbono que emitimmos no <br> dia à dia através do uso de transporte automobilistico.</P>
                </div>

                <div class="img-topo-site">
                     <img src="SCCP_escudo-150px.png" width="480px" alt="">
                </div>
            </div>
        </div><!--interface-->
    </section><!--topo da interface-->
</main>


    <?php 
    include('../AppView/Footer.php');
    ?>
</body>
</html>