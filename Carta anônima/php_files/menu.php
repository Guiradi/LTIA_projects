<?php
	// Se pagina == valor da pagina ? 'class = "active font_nav"' : 'class = "font_nav"'  
?>

<!-- Barra de Navegação -->
	<nav class="navbar navbar-fixed-top navbar-default">
		
		<div class="container-fluid navbar-fundo"> <!-- Agrupar logo toggle e links -->

			<div class="navbar-header">
					
				<!-- Botão Alternar -->
				<button type="button" class="navbar-toggle collapsed navbar-right" data-toggle="collapse" data-target="#barra-navegacao" aria-expanded="false">
					<span class="sr-only">Alternar navegação</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- Logo Carta -->
				<a class="navbar-brand" href="index.php">
					<span class="img-logo">Logo</span>
				</a>
			</div> <!--/navbar-header-->

			<!-- navbar -->
			<div class="collapse navbar-collapse" id="barra-navegacao">

				<ul class="nav navbar-nav text-center">

					<li class="font_nav">
						<a href="index.php">
							Home
						</a>
					</li>

					<li class="font_nav">
						<a href="relatos.php">
							Relatos
						</a>
					</li>

					<li class="font_nav">
						<a href="escreva.php">
							Escreva seu relato
						</a>
					</li>

					<li class="font_nav">
						<a href="info.php">
							Informações
						</a>
					</li>

					<li class="font_nav">
						<a href="privacidade.php">
							Privacidade
						</a>
					</li>					

				</ul>
					
			</div> <!--/itens da barra-navegacao-->

		</div> <!--/nav container-fluid-->

		<img src="img/top-mobile.png" id="top-mobile" class="visible-xs-block">
			
	</nav>