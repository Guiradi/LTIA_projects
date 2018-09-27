<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Carta Anônima - Relato</title>
		<link rel="icon" href="img/favicon.png">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Estilo CSS -->
		<link rel="stylesheet" href="css/estilo.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    	<!--[if lt IE 9]>
    		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
	</head>

	<body>

		<!-- Barra de Navegação -->
		<?php
			include "menu.php";
		?>

		<!-- Conteúdo Info -->
		<section id="primeiro_conteudo">

			<div class="container"> 
				
				<div class="row">
					
					<div class="relato col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

						<span id="titulo-relato">
							<h3><b>Título</b></h3>
						</span>
						
						<span id="texto-relato" class="justif">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempus felis semper nibh imperdiet, sit amet sodales odio lobortis. Quisque mattis turpis a rutrum mollis. In enim purus, feugiat ut iaculis sed, rhoncus a risus. Praesent a purus at odio condimentum consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eu justo eget magna viverra eleifend. Aliquam a velit elit. Sed ultrices nec eros eu lobortis. Sed sed nisl non mauris molestie cursus. Nullam non fringilla eros. Integer augue justo, pellentesque quis consectetur non, vulputate at lacus.
						</p>
						</span>
						
						<span id="autor-relato">Autor Anônimo</span>
						
					</div>	

				</div><!--/row x -->

				<div class="row">

					<div class="col-sm-offset-2 col-sm-8 col-xs-10 col-xs-offset-1">
						<span id="denuncia">
							<a href="#"><b>Denuncie esse post</b></a>
						</span>
					</div>

				</div><!--/row x -->

			</div> <!--/container primeiro conteudo-->

		</section>

		<!-- Rodapé -->
		<footer id="rodape">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-sm-3 col-md-4"  id="marca-texto1">

						<span><b>
							Polícia Militar:<br>
							disque 190</b>
						</span>
					</div>

					<div class="col-sm-6 col-md-4" id="marca-texto2">
						
						<span><b>
							Central de Atendimento à mulher:<br>
							disque 180</b>
						</span>
					</div>

					<div class="col-sm-3 col-md-4" id="marca-texto3">

						<span><b>
							Disque Denúncia:<br>
							disque 181</b>
						</span>
					</div>

				</div> <!-- row rodape -->

			</div> <!--/container rodape-->

		</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>