<?php

// conexao com o banco

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "refatorada");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pincipal</title>
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

    <section id="sobre-nos" class="container">
		<h2 class="titulo-depoimentos">Sobre Nós</h2>
		<div class="row">
			<img class="img-responsive col-sm-6" src="../img/layatefim.jpg" alt="">

			<div class="panel-group col-sm-6" id="paineis-sobre">
				<div class="panel panel-default">
					<div class="panel-heading" data-toggle="collapse" data-target="#primeiro-paragrafo" data-parent="#paineis-sobre">
						<h3 class="panel-title">Desde 2021</h3>
					</div>

					<div class="collapse in" id="primeiro-paragrafo">
						<div class="panel-body">
							Desde 2021, nossa loja cresceu e hoje está em 3 estados
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" data-toggle="collapse" data-target="#segundo-paragrafo" data-parent="#paineis-sobre">
						<h3 class="panel-title">Contato</h3>
					</div>

					<div id="segundo-paragrafo" class="collapse">
						<div class="panel-body">
							Aqui você pode falar a real, sobre nós e nossos produtos
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" data-toggle="collapse" data-target="#terceiro-paragrafo" data-parent="#paineis-sobre">
						<h3 class="panel-title">Geladeiras,Fogues,Microodas ETC..</h3>
					</div>

					<div id="terceiro-paragrafo" class="collapse">
						<div class="panel-body">
							Mais de 5 milhões de opcoes disponiveis
						</div>
					</div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading" data-toggle="collapse" data-target="#quarto-paragrafo" data-parent="#paineis-sobre">
                        <h3 class="panel-title">Opções de A até Z</h3>
                    </div>

                    <div id="quarto-paragrafo" class="collapse">
                        <div class="panel-body">
                            Todas as mercadorias eletronicas a pronta entrega
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </section>
        
        <div class="jumbotron">
            <div class="container">
                <h3>NOSSOS PRODUTOS</h3>
                <p>De A até Z</p>
            </div>
        </div>

        <div class="container">

            <h2>Nossos Produtos</h2>
             
        </div>
        

        <?php

            $sql = "select * from produtos";
            $result = $con -> query($sql);
            
            if($result -> num_rows > 0){
                while($rows = $result -> fetch_assoc()){
        ?>

    
        <section id="nossos-produtos" class="container" class="box">
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
                echo "nenhum produto cadastrado";
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