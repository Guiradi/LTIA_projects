<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Carta Anônima - Escrever</title>
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
			
			<div class="container escreva">
				
				<div class="row col-xs-10 col-xs-offset-1">
					<div class="col-md-7 col-md-offset-4 justif">
						<p>
							Aqui você pode escrever o seu relato. Você não precisa dizer seu nome, de onde você é ou nada que não queira dizer. Queremos apenas que você se sinta confortável para compartilhar o que quiser.
						</p>
					</div>
				</div> <!--/label explicação-->

				<div class="row col-xs-10 col-xs-offset-1">
					<div class="col-md-7 col-md-offset-4">
						<h4><b>Escreva seu relato:</b></h4>
					</div>
				</div> <!--/Escreva seu relato-->

				<div class="row col-xs-8 col-xs-offset-2 col-md-10 col-md-offset-1">
						
						<form class="form-horizontal" role="form">

							<div class="form-group">
								
								<label for="input-titulo" class="col-md-4 control-label letra-label">
									Título (opcional):
								</label>

								<div class="col-md-7">
									<input type="text" class="form-control" id="input-titulo">
								</div>

							</div> <!--/form-group titulo-->

							<div class="form-group">
								
								<label for="input-nome" class="col-md-4 control-label letra-label">
									Nome (opcional):
								</label>

								<div class="col-md-7">
									<input type="text" class="form-control" id="input-nome">
								</div>

							</div> <!--/form-group nome-->

							<div class="form-group">
								
								<label for="input-relato" class="col-md-4 control-label letra-label">
									Relato:
								</label>

								<div class="col-md-7">
									<textarea class="form-control" rows="8" id="input-relato"></textarea>
								</div>

							</div> <!--/form-group relato-->

							<div class="form-group">
								
								<div class="col-md-offset-10 visible-md-block visible-lg-block">
									<button type="submit" id="botao-enviar">Enviar</button>
								</div>

								<div class="pull-right visible-sm-block visible-xs-block col-md-10">
									<button type="submit" id="botao-enviar">Enviar</button>
								</div>

							</div> <!--/form-group botão-->

						</form>

					</div><!--centralização da pagina-->
				</div>

			</div> <!--/container do primeiro conteudo-->

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