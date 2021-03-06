<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Carta Anônima - Home</title>
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

		<!-- Conteúdo Home -->

		<section id="primeiro_conteudo">

			<div class="container">
				
				<!-- Imagem em dispositivos muito pequenos -->
				<div class="row visible-xs-block" id="img-xs">
					<div class="col-xs-6 col-xs-offset-3">
						<img src="img/logo_home.png" class="img-responsive">
					</div>					
				</div> <!--/row xs imagem-->

				<!-- Texto em dispositivos muito pequenos -->
				<div class="row visible-xs-block">
					<div class="col-xs-10 col-xs-offset-1">
						<p>
							Este é um espaço para mulheres poderem compartilhar qualquer tipo de violência que sofreram ou presenciaram, seja física, verbal ou sexual. É um espaço para que essas pessoas, independente do seu gênero ou identidade, possam desabafar, conscientizar, encontrar pessoas que passaram por situações parecidas… e tudo isso de forma completamente anônima e segura. Além disso, no menu “Informações” há números e links úteis, tanto para denúncia quanto para ajudar a lidar com a situação, reações e emoções.
						</p>
					</div>
				</div> <!--/row xs texto-->

				<div class="row visible-sm-block visible-md-block visible-lg-block">
					
					<!-- Texto -->
					<div class="col-lg-4 col-md-5 col-sm-6 col-md-offset-1 col-lg-offset-2">
						<p>
							Este é um espaço para mulheres poderem compartilhar qualquer tipo de violência que sofreram ou presenciaram, seja física, verbal ou sexual. É um espaço para que essas pessoas, independente do seu gênero ou identidade, possam desabafar, conscientizar, encontrar pessoas que passaram por situações parecidas… e tudo isso de forma completamente anônima e segura. Além disso, no menu “Informações” há números e links úteis, tanto para denúncia quanto para ajudar a lidar com a situação, reações e emoções.
						</p>
					</div>

					<!-- Imagem depois do texto em outros dispositivos -->
					<div class="col-lg-4 col-md-5 col-sm-6">
						<img src="img/logo_home.png" class="img-responsive">
					</div>
					
				</div> <!--/row apresentacao da home-->

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