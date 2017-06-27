<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	//session_start();
	include_once "model/db_config.php";
	include_once "model/bd_class.php";
	$bd = new BD($db);
	if(isset($_GET['erro'])){
			echo "<script>alert('Erro ao realizar login!');</script>";
	}
	if(isset($_POST['email'])){
		//Email information
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$assunto = $_POST['assunto'];
		$mensagem = $_POST['mensagem'];
		$nome = $_POST['email'];
	  	$admin_email = "masteralimentos@uepg.br";

	  	$mensagem_email = "Nome: $nome\n
	  		Assunto: $assunto\n
	  		E-mail: $email\n
	  		Telefone: $telefone\n
	  		Mensagem: $mensagem\n";

	  	//send email
	  	mail($admin_email, "$assunto", $mensagem_email, "From:" . $email);

	  	//Email response
	  	echo "<script>alert('E-mail enviado com sucesso! Agradeçemos pelo contato');</script>";
	}

	?>



	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="libs/lightslider/css/lightslider.css">

	<title>Master Alimentos</title>
	<!-- ÍCONES -->
	<link rel="apple-touch-icon" sizes="57x57" href="./imgs/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./imgs/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./imgs/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./imgs/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./imgs/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./imgs/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./imgs/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./imgs/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./imgs/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="./imgs/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./imgs/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./imgs/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./imgs/favicon/favicon-16x16.png">
	<link rel="manifest" href="./imgs/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="./imgs/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<header id="header" class="header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#inicio">Master Alimentos</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#portifolio">Projetos</a></li>
					<li><a href="#edital">Editais</a></li>
					<!--<li><a href="inscricao.php">Inscrições</a></li>-->
					<li><a href="#rodape">Contato</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<!--<li><a href="inscricao.php">Processo seletivo 2017</a></li> -->
				</ul>
				<a type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal" style="color: #fff;
				background-color: #d9534f;">LOGIN</a>
				<!--<a type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">LOGIN</a>-->
			</div>
		</div>
	</nav>
</header><!-- /header -->

<body id="inicio">
	<!-- INICIALIZAÇÃO DO PLUGIN DO FACEBOOK -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=1568198470134190";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- FIM DA INICIALIZAÇÃO DO PLUGIN DO FACEBOOK -->

	<!-- AQUI COMEÇA O BANNER -->
	<!--AQUI COMECA INFORMACAO-->
	<section>
		<div class="container">
			<!-- AQUI COMEÇA A MENSAGEM DE INSCRIÇÃO REALIZADA -->
			<?php
				if(isset($_GET['send'])){
					$aux = $_GET['send'];
					if($aux == 1){
			?>
				<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<p align="center">Inscrição realizada com sucesso!</p>
				</div>
			<?php
				}}
			?>
			<!-- AQUI TERMINA INSCRIÇÃO REALIZADA -->

			<div class="row">
				<div class="col-md-12">
					<ul id="slider-inicial">
						<li>
							<div class="col-md-12 text-center">
								<div>
									<img class="img-responsive img-rounded" src="img/banner-II.jpg" alt="">
								</div>
							</div>
						</li>
						<!--<li>
							<div class="col-md-12 text-center">
								<img class="img-responsive img-rounded" src="img/bee-master.png" alt="">
							</div>
						</li> -->
						<li>
							<div class="col-md-12 text-center">
								<img class="img-responsive img-rounded"
								 src="img/equipe2017.png" alt="">
								<!--<img class="img-responsive img-rounded"
								 src="img/equipe2017.jpg" alt="">-->
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--
	<section>
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="meuCarrossel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators"> <!-- "Bolinhas" da navegação pelos slides -->
							<!--	<li data-target="#meuCarrossel" data-slide-to="0" class="active"></li>
								<li data-target="#meuCarrossel" data-slide-to="1"></li>
								<li data-target="#meuCarrossel" data-slide-to="2"></li>
								<!-- AQUI ADICIONA NOVOS INDICADORES -->
							<!--</ol>
							<div class="carousel-inner" role="listbox"> <!-- Container dos slides -->
							<!--	<div class="item active">
									<img src="img/banner-II.jpg" alt="">
									<div class="carousel-caption">
										<!--<h4>Slide 1</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>-->
							<!--		</div>
								</div>
								<div class="item">
									<a href="#"></a>
									<div class="carousel-caption">
										<!--<h4>Slide 2</h4>
										<p>Curabitur hendrerit erat ut augue. Cras gravida.</p>-->
							<!--		</div>
								</div>
								<div class="item">
									<a href="#" class="text-center"><img src="img/equipe.png" alt=""></a>
									<div class="carousel-caption">
										<!--<h4>Slide 2</h4>
										<p>Curabitur hendrerit erat ut augue. Cras gravida.</p>-->
							<!--		</div>
								</div>
								<!-- AQUI ADICIONA UM NOVO SLIDE -->
							<!--</div> <!-- /.carousel-inner -->
							<!--<a class="left carousel-control" href="#meuCarrossel" data-slide="prev" role="button"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Anterior</span></a>
							<a class="right carousel-control" href="#meuCarrossel" data-slide="next"
							role="button"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Próximo</span></a>
						</div> <!-- /#meuCarrossel -->
					<!--</div>
				</div>
			</div>
		</div>
	</section>

	<!-- AQUI TERMINA O BANNER -->



	<!-- AQUI COMEÇA O MODAL DE LOGIN-->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Login</h4>
				</div>
				<div class="modal-body">
					<form method="POST" role="form" action="model/login.php">
						<div class="form-group">
							<label for="">Usuário:</label>
							<input type="text" name="usuario" class="form-control" id="exampleInputEmail1" placeholder="Usuário">
						</div>
						<div class="form-group">
							<label for="">Senha:</label>
							<input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- AQUI TERMINA O MODAL DE LOGIN-->
	<!-- AQUI COMEÇA O MODAL DE EDITAIS -->
	<!-- Modal -->
	<div class="modal fade" id="modalEditais" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Outros Editais</h4>
				</div>
				<div class="modal-body">
					<?
					$bd->listaEditaisModal();
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- AQUI TERMINA O MODAL DE EDITAIS-->
	<!--AQUI COMECA INFORMACAO-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="texto">
						<i>"Desenvolvendo soluções, obtendo aprendizado"</i>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!--AQUI TERMINA INFORMACAO-->
	<!--AQUI COMECA ICONS-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4 icon h">
					<h3 class="h3_hand zoom">Trabalho</h3>
					<img class="icon-hand zoom"src="img/hands.png"></img>
				</div>
				<div class="col-md-4 icon h">
					<h3 class="h3_lamp zoom">Inovação</h3>
					<img class="icon-lamp zoom" src="img/lamp.png"></img>
				</div>
				<div class="col-md-4 h">
					<h3 class="h3_lab zoom">Pesquisa</h3>
					<img class="icon-lab zoom" src="img/icon-lab.png"></img>
				</div>
			</div>
		</div>
	</section>
	<!--AQUI TERMINA ICONS-->
	<!-- AQUI COMEÇA PORTIFOLIO -->
	<section id="portifolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title-projeto">
					<h4 class="">PROJETOS</h4>
					<ul id="slider-portifolio">
						<?php $bd->listaPortifolioPaginaPrincipal(); ?>
					</ul>
				</div>

			</div>
		</div>
	</section>
	<!-- AQUI TERMINA PORTIFOLIO -->
	<!-- AQUI COMEÇA EDITAIS -->


	<section id="edital">
		<div class="container" >
			<div class="row">
				<div class="col-md-6 title-edital">
					<h4 class="">EDITAIS</h4>

					<?php
						$bd->listaEditaisPaginaPrincipal();
					?>
					<!--<div class="text-right">
						<a href="#" data-toggle="modal" data-target="#modalEditais"> Veja mais editais </a>
					</div>-->

				</div>
				<div class="col-md-6 title-edital">
					<div class="fb-page" data-href="https://www.facebook.com/MasterAlimentosJr/" data-tabs="timeline" data-width="500" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/MasterAlimentosJr/"><a href="https://www.facebook.com/MasterAlimentosJr/">Master Alimentos</a></blockquote></div></div>
				</div>
			</div>
		</div>
	</section>
	<!-- AQUI TERMINA EDITAIS -->



</body>
<!-- AQUI COMEÇA O RODAPE -->
<footer>
	<section>
		<div  id="rodape">
			<div class="container">
				<div class="row">
					<div class="col-md-12 title-contato">
						<h4 class="">ENTRE EM CONTATO</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">

						<div id="googleMap" style="width:100%;height:300px;"></div>
						<address class="endereço">
							<br>
							<p>
								&copy; Master Alimentos
							</p>
							<p>
								Avenida Carlos Cavalcanti, 4748,
								84053-900,
								Ponta Grossa, Paraná, Brasil
							</p>
							<p>
								Telefone: (42) 9862-1412
							</p>
						</address>
					</div>
					<div class="col-md-8">
						<form method="post">
							<div class="col-md-6">
								<input type="text" class="form-control formulario" placeholder="Seu Nome" name="nome">
								<input type="text" class="form-control formulario" placeholder="Numero de Telefone" name="telefone">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control formulario" placeholder="Email" name="email">
								<input type="text" class="form-control formulario" placeholder="Assunto" name="assunto">
							</div>
							<div class="col-md-12">
								<textarea class="form-control formulario" rows="4" placeholder="Mensagem" name="mensagem"></textarea>
								<div class="text-right">
									<button type="submit" class="btn send-btn">Enviar</button>
								</div>
							</div>
						</form>
					</div>
					<p class="EJEC">
						&copy; Desenvolvido por EJEC - UEPG
					</p>
				</div>
			</div>
		</div>
	</section>

</footer>
<!-- AQUI TERMINA O RODAPE -->

<!-- JAVA SCRIPT -->
<!-- GOOGLE MAPS API -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="libs/lightslider/js/lightslider.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
