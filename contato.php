<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Contato</title>
</head>
<body>

<!--menu-->

<?php
    include_once('menu.html');
?>

    <section id="vendidos">
        <h2 class="container titulo-produto">Nossas Lojas</h2>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="./depoimentos/depoimento1.png" alt="Loja são paulo">
                <div class="carousel-caption">
                  <p class="depoimentos">ofertas especiais toda as sextas feiras!</p>
                </div>
              </div>
          
              <div class="item">
                <img src="./depoimentos/depoimento2.png" alt="Loja Rio de Janeiro">
                <div class="carousel-caption">
                  <p class="depoimentos">Promoção dessa semana, Geladeiras!</p>
                </div>
              </div>
          
              <div class="item">
                <img src="./depoimentos/depoimento3.png" alt="Loja de Belo Horizonte">
                <div class="carousel-caption">
                  <p class="depoimentos">Geladeiras e Fogões em promoção</p>
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

    <section id="contato" class="col-sm-">

      <div class="container">
        <h2>Contato</h2>
        <h4>Preenxa esse formulario e fale conosco</h4>
      
      <form>
        <div class="form-grupo">
          <label for="contato-nome">Nome:</label>
          <input id="contato-nome" class="form-control" type="text" 
          placeholder="Seu nome">
        </div>

        <br>
        <br>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Diga a sua opinião</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
      </section>
    </div>
  </div>
</div>

<br>
<br>

        <!-- footer -->

        <?php
        include_once('footer.html')
    ?>

</body>
</html>