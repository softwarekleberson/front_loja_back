<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "refatorada");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Os mais vendidos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    
<!--menu-->

<?php
    include_once('menu.html');
?>

    <section id="vendidos">
        <h2 class="container">Os mais vendidos</h2>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="./img mais vendidos/fogues.jpg" alt="Fogão">
                <div class="carousel-caption">
                  <p class="depoimento">A mais amada pelos chefes de cozinha!</p>
                </div>
              </div>
          
              <div class="item">
                <img src="./img mais vendidos/maquinaLavar.jpg" alt="MaquinaLavar">
                <div class="carousel-caption">
                  <p class="depoimento">Lava toda a louça suja rapidamente!</p>
                </div>
              </div>
          
              <div class="item">
                <img src="./img mais vendidos/microodas.jpg" alt="Microondas">
                <div class="carousel-caption">
                  <p class="depoimento">Aqueça a sua comida em três, dois, um!</p>
                </div>
              </div>
        </div>
          
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>

    <div class="jumbotron">
        <div class="container">
            <h3>Nossos clientes também viram esses produtos</h3>
            <strong><p>De uma molhada você também</p></strong>
        </div>
    </div>

    <?php

            $sql = "select * from produtos where idProdutos > 1 and idProdutos <= 4";
            $result = $con -> query($sql);
            
            if($result -> num_rows > 0){
                while($rows = $result -> fetch_assoc()){
    ?>


    <section id="nossos-produtos" class="container">
                    
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail">
                            <img src="<?php echo $rows["img"]; ?>" style="display: inline-block;" >
                            <figcaption class="caption">
                                <h3><?php echo $rows["produto"]; ?></h3>
                                <p>
                                    <?php echo $rows["descricao"]; ?>
                                </p>

                                <strike><p>R$ : <?php echo $rows["precoInicial"]; ?></p></strike>

                                <p>
                                    R$ :
                                    <?php echo $rows["precoFinal"]; ?>
                                </p>

                            </figcaption>
                        </figure>
                    </div>
            </section>

            
        <?php

            } 
                }
            else {
                echo "nenhum produto cadastrado no topvendas";
            }

        ?>

    <br>
    <br>

        <!-- footer -->

        <?php
        include_once('footer.html')
    ?>


</body>
</html>