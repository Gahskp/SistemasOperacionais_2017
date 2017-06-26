<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="libs/lightslider/css/lightslider.css">
	<link rel="stylesheet" type="text/javascript "	href="js/bootstrap.js">

	
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

	<title></title>
	<link rel="stylesheet" href="">

	<title>Bootstrap carrosel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .frase{
	 color: #000;

}
  </style>
</head>

<body>

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
				<a class="navbar-brand" href="index.php">Master Alimentos</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Projetos</a></li>
					<li><a href="index.php">Editais</a></li>
					<!--<li><a href="inscricao.php">Inscrições</a></li>-->
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="#rodape" >Contato</a></li>
					<li><a href="inscricao.php">Processo seletivo 2017</a></li>
				</ul>
				<a type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">LOGIN</a>
			</div>
		</div>
	</nav>
	<!--AQUI COMECA INTEGRANTES-->
	<section id="diretoria">
		<div class="bg_diretoria" style="border-radius: 20px;" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 title">
						<h2 class="">DIRETORIA</h2>
					</div>
				</div>
				<div class="row diretoria">

					<div class="col-md-4 col-xs-4">
						<img class="circle" src="img/Diretoria/hirina.jpg">
						
						<p><span>H</span>irina <span>B</span>rustolini
						<p>Presidente</p>
					</div>
					<div class="col-md-4 col-xs-4">
						<img class="circle" src="img/Diretoria/Pia1.fw.png"></img>
						<p><span>J</span>ean <span>M</span>arcos <span>P</span>ereira</p>
						<p>Vice-presidente</p>
					</div>
					<div class="col-md-4 col-xs-4">
						<img class="circle" src="img/Diretoria/luizGuilherme.jpg">
						<p><span>L</span>uiz <span>G</span>uilherme</p>
						<p>Diretor Administrativo</p>
					</div>
				</div>
				<div class="row diretoria">

					<div class="col-md-4 col-xs-4">
						<img class="circle" src="img/Diretoria/bruno.jpg">
						<p><span>B</span>runo <span>B</span>arszcz</p>
						<p>Diretor de Marketing</p>

					</div>
					<div class="col-md-4 col-xs-4">
						<img class="circle" src="img/Diretoria/gabriele.jpg">
						<p><span>G</span>abriele <span>G</span>audencio</p>
						<p>Diretora de Qualidade</p>
					</div>
					<div class="col-md-4 col-xs-4" style="margin-top: -20px">
						<<img class="circle" src="img/Diretoria/camila.jpg">
						<p><span>C</span>amila <span>G</span>omes</p>
						<p>Diretora de Projetos</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- AQUI TERMINA DIRETORIA -->
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

	<!--AQUI COMECA INFORMACAO-->
	<section>
		<!--<div class="container"> -->
			<div class="row">
				<div class="col-md-12 title-edital">
					<h2 class="">DEPOIMENTOS</h2>
				</div>
			</div>
			
	<div class="container-fluid">
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
      <li class="item5"></li>
      <li class="item6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style=" border-radius: 20px">

      <div class="item active">
        <img src="img/user-female.png" alt="">
        <div class="carousel-caption">
        	<div class="frase">
          	<h3>Marina Fidelis - Diretora de Projetos - 2015</h3>
								<p>"A diretoria de projetos é a área da administração responsável pela realização dos projetos. Tem por objetivos elaborar todas as etapas de processo de captação de recursos, através de um planejamento estratégico, coordenar as atividades e projetos de maneira responsável e organizada para promover a realização correta dos projetos, promover apoio técnico às demais diretorias e efetuar outras atividades afins, no âmbito de sua competência. O diretor de projetos exerce sua função de manter o progresso e a interação mútua dos integrantes, de forma a reduzir o risco de fracasso do projeto."</p>
        </div>
        </div>
      </div>

      <div class="item">
        <img src="img/user-female.png" alt="">
        <div class="carousel-caption">
        	<div class="frase">
          <h3>Diretoria de Qualidade</h3>
								<p>"A Diretoria da Qualidade é a divisão da Master Empresa Junior de Consultoria responsável pela realização das atividades de controle, manutenção e melhoria dos processos que estão envolvidos na Empresa, pelo uso de ferramentas de qualidade."</p>
								<a href="#" data-toggle="modal" data-target="#modal-depoimento2">Ver mais...</a>
       	 </div>
     	</div>
      </div>
    
      <div class="item">
        <img src="img/user-female.png" alt="">
        <div class="carousel-caption">
        	<div class="frase">
								<h3>Diretoria administrativa</h3>
								<p>"A Master contribuiu e ainda contribui muito para o meu crescimento não só profissional como pessoal, além de eu saber como uma pequena empresa funciona, e como é dividida, aprendi em como se comportar em uma empresa, assim como conviver e trabalhar com diferentes personalidades de pessoas. Além do contato que você tem tanto com ex membros como com professores, clientes, e outras empresas júniores. O que é mais legal, é poder aplicar algumas coisas que você já viu em sala de aula, assim como aprender coisas novas que você iria aprender somente mais tarde, no estágio obrigatório de conclusão de curso."</p>
								<a href="#" data-toggle="modal" data-target="#modal-depoimento3">Ver mais...</a>
       	 	</div>
     	 </div>
      </div>
       <div class="item">
        <img src="img/user-female.png" alt="">
        <div class="carousel-caption">
        	<div class="frase">
								<h3>Rafaela Gomes - ex-presidente</h3>
								<p>"Minha experiência na Master Alimentos foi incrível! Durante 3 anos tive a oportunidade de crescer dentro da empresa e entrar em contato com o trabalho de muitos produtores e empresários da região. A melhor parte é vivenciar essa vertente que o nosso curso proporciona, a empresarial, que é pouco explorada durante a graduação. Além disso, você participa de visitas e pesquisas, aprendendo assuntos que só seriam estudados no final do curso. É uma excelente maneira de enriquecer o currículo e conseguir o diferencial necessário para conquistar o estágio dos sonhos."</p>
        	</div>
        </div>
      </div> 
      <div class="item">
        <img src="img/user-female.png" alt="">
        <div class="carousel-caption">
        	<div class="frase">
								<h3>Katherine G. Oliveira - ex-colaboradora de Marketing</h3>
								<p>"Dentre as experiências que tive durante a universidade, a Master Alimentos teve grande importância para mim, pois contribuiu para que eu pudesse me preparar para o mercado de trabalho, a saber me relacionar com pessoas diferentes, a trabalhar em grupo, a respeitar e ouvir os membros da empresa, a ter maior responsabilidade com projetos e prazos. Quem tiver a oportunidade de entrar numa empresa júnior e que souber aproveitar, com certeza terá em sua vida maior conhecimento e experiências que poucas pessoas possuem, tanto na vida pessoal como na vida profissional."</p>
     		 </div>
  		</div>
    </div>
    <div class="item">
        <img src="img/user-female.png" alt="">
        <div class="carousel-caption">
        	<div class="frase">
          <h3>Nataly Fagundes - ex-colaboradora de Projetos</h3>
								<p>"A Master além de me dar a oportunidade ainda enquanto acadêmica de conhecer meu eu profissional, me ensinou coisas que vão além da sala de aula, como liderança, trabalho em equipe, pró atividade e dinamismo. O mercado de trabalho está cada vez mais competitivo, é preciso se destacar, e a maior oportunidade pra isso enquanto universitário é sem dúvida a empresa júnior!"</p>
        	</div>
        </div>
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>
	<!-- MODAL DE DEPOIMENTOS -->

	<div id="modal-depoimento1" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Depoimento - Marina Fidelis</h4>
				</div>
				<div class="modal-body">
					<h4>Diretoria de Projetos</h4>
					<p>A diretoria de projetos é a área da administração responsável pela realização dos projetos. Tem por objetivos elaborar todas as etapas de processo de captação de recursos, através de um planejamento estratégico, coordenar as atividades e projetos de maneira responsável e organizada para promover a realização correta dos projetos, promover apoio técnico às demais diretorias e efetuar outras atividades afins, no âmbito de sua competência. O diretor de projetos exerce sua função de manter o progresso e a interação mútua dos integrantes, de forma a reduzir o risco de fracasso do projeto.</p>
					<h4>Experiências vividas</h4>
					<p>A entrada em uma empresa júnior revela experiências que podem transformar o futuro de uma carreira profissional. A partir do desenvolvimento de projetos, desde o início, como membro efetivo, até alcançar o nível de diretora de Projetos, pude compreender que trabalhar com pessoas envolve muito mais do que simples aptidão, mas envolve também responsabilidade e profissionalismo. Além disso, para resolver e terminar um projeto, é preciso entender que nós não trabalhamos sozinhos, e que sim, nós precisamos de uma equipe alinhada. Não tive a oportunidade de trabalhar em outros setores, mas com certeza pude absorver tudo o que a diretoria de Projetos tem a oferecer de melhor para meu aprendizado. Por isso, quando me perguntam se tive boas experiências na Master Alimentos, digo que, sem dúvida, ela foi determinante. Sei exatamente em que devo atuar e como devo atuar. A empresa júnior é realmente um ensaio para a vida real.</p>
					<h4>Projetos realizados e em andamento</h4>
					<p>
						<ul>
							<li>Projeto Vinho Ernesto Denck – Desenvolvimento de Rotulagem e análises físico-químicas.</li>
							<li>Projeto Val Salgados – Manual de Boas Práticas de Fabricação e Treinamento de Boas Práticas para funcionários.</li>
							<li>Projeto Minimamente Processados – Estudo teórico sobre melhores opções de embalagens para frutas e hortaliças minimamente processadas.</li>
							<li>Projeto Engenheiro da Coxinha – Manual de Boas Práticas de Fabricação.</li>
							<li>Projeto Sabor Alternativo – Análises físico-químicas e interpretação de resultados obtidos.</li>
							<li>Projeto Suco Vivo – Informações de rotulagem; Estudo teórico sobre documentação necessária, embalagem e pontos críticos na fabricação dos sucos.</li>
							<li>Projeto Pimenta Dedo de Moça e Molho de Pimenta – Estudo teórico sobre conservação/armazenamento processamento da hortaliça, bem como a escolha de embalagens apropriadas.</li>
						</ul>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>

		</div>
	</div>
	<div id="modal-depoimento2" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Depoimento - Diretoria de Qualidade</h4>
				</div>
				<div class="modal-body">
					<h4>Diretoria de Qualidade</h4>
					<p>A Diretoria da Qualidade é a divisão da Master Empresa Junior de Consultoria responsável pela realização das atividades de controle, manutenção e melhoria dos processos que estão envolvidos na Empresa, pelo uso de ferramentas de qualidade.</p>
					<h4>O que eu aprendi com a master:</h4>
					<p>Aprendi a trabalhar melhor em equipe, a utilizar várias ferramentas de qualidade, tive a oportunidade de desenvolver manuais de boas práticas de fabricação e estou tendo um boa noção de como é trabalhar em uma empresa e isso faz com que me sinta mas preparada quando for entrar no mercado de trabalho.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>

		</div>
	</div>
	<div id="modal-depoimento3" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Depoimento - Diretoria administrativa</h4>
				</div>
				<div class="modal-body">
					<h4>Diretoria administrativa</h4>
					<p>A Master contribuiu e ainda contribui muito para o meu crescimento não só profissional como pessoal, além de eu saber como uma pequena empresa funciona, e como é dividida, aprendi em como se comportar em uma empresa, assim como conviver e trabalhar com diferentes personalidades de pessoas. Além do contato que você tem tanto com ex membros como com professores, clientes, e outras empresas júniores. O que é mais legal, é poder aplicar algumas coisas que você já viu em sala de aula, assim como aprender coisas novas que você iria aprender somente mais tarde, no estágio obrigatório de conclusão de curso.</p>
					<p>A Diretoria Administrativa é o setor da Master Empresa Junior de Consultoria responsável pelo funcionamento propriamente dito da associação. Esta área está incumbida de cuidar de todos os processos que envolvem o funcionamento da instituição. Por ser uma área muito grande e que demanda muita responsabilidade e organização, envolve os seguinte setores: setor de Recursos Humanos, setor Jurídico e setor Financeiro.</p>
					<h4>Deveres</h4>
					<ul>
						<li>
							<i>Setor de Recursos Humanos</i>
							<br>
							<p>
								É o Setor de Recursos Humanos que coordena e gerencia os participantes da empresa e está sempre harmonizando o ambiente de trabalho. O RH deve ajudar na adaptação dos membros da empresa com novas políticas de gestão de pessoas, mantendo o equilíbrio da cobrança por parte dos dirigentes.
								<br>
								O RH também acompanha o membro por toda sua passagem pela empresa, desde sua seleção até o seu desligamento (selecionar, treinar, avaliar, reconhecer, conscientizar, motivar, demitir, entre outros). Dessa forma a diretoria preocupa-se não somente com a harmonia do ambiente de trabalho, mas também com o desenvolvimento pessoal de cada um.
							</p>
						</li>
					</ul>
					<h4>O que eu aprendi com a master:</h4>
					<p>Aprendi a trabalhar melhor em equipe, a utilizar várias ferramentas de qualidade, tive a oportunidade de desenvolver manuais de boas práticas de fabricação e estou tendo um boa noção de como é trabalhar em uma empresa e isso faz com que me sinta mas preparada quando for entrar no mercado de trabalho.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>

		</div>
	</div>
	<!--AQUI TERMINA INFORMACAO-->
	<!-- AQUI COMEÇA INSCRIÇAO -->
	<section id="inscricao">
		<div class="container">
			<div class="row">
			 <div class="col-md-6 col-md-offset-3 title-edital">
			  <h3>Inscrições em 27/03/2017</h3>
			 <h2 >Conheça as diretorias e funções</h2>
			 </div>
			 
			 <div class="col-md-6 col-md-offset-3">
			 <h4 class="circle" align="center">ADMINISTRATIVO</h4>
				<p style="text-indent: 5 px; font-size: 17px;">A diretoria administrativa é responsável pelo equilíbrio e organização da empresa, desde recursos humanos até a parte financeira. 
				Serve como suporte para todas as outras diretorias. 
				Está ligada diretamente com a parte burocrática (documentação), incluindo, o cumprimento das obrigações fiscais cabíveis a empresa.</p>
			 </div>
			 
			 <div class="col-md-6 col-md-offset-3">
			 <h4 class="circle" align="center">QUALIDADE</h4>
				<p style="font-size: 17px;">A garantia da qualidade consiste em todas as atividades planejadas e sistemáticas que são implementadas dentro do sistema, 
				buscando assegurar que o projeto irá satisfazer os padrões. Para tal fim, aplicam-se as mais variadas ferramentas de qualidade, 
				que variam de acordo com a necessidade de cada projeto ou na resolução de um problema.</p>
				
				<p style="font-size: 17px;">A diretoria de qualidade busca reduzir o máximo possível as falhas encontradas na empresa, otimizando e padronizando o trabalho 
				de todas as diretorias. Sendo assim, a atuação da diretoria de qualidade é indispensável na manutenção do trabalho interno de qualquer 
				empresa, buscando a melhor forma de garantir que todos façam o melhor trabalho possível.</p>
			 </div>
			 
			 <div class="col-md-6 col-md-offset-3">
			 <h4 class="circle" align="center">MARKETING</h4>
				<p style="font-size: 17px;">O Marketing é uma atividade, conjunto de instituições e processos para criar uma série de estratégias, técnicas e práticas que tem 
				o principal objetivo de agregar valor ao nome da empresa a fim de atribuir uma maior importância das mesmas para um determinado público-alvo, 
				os consumidores.</p>
			 </div>
			 
			 <div class="col-md-6 col-md-offset-3">
			 <h4 class="circle" align="center">PROJETOS</h4>
				<p style="font-size: 17px;">Essa diretoria é a responsável pelo desenvolvimento dos projetos, sendo alguns deles mais voltados para pesquisa e alguns deles mais voltados 
				para análises, cálculos etc. </p>
				<p style="font-size: 17px;">Os membros dessa diretoria necessitam trabalhar bem em equipe e ter um bom diálogo, não só com os outros membros da diretoria, mas também com os 
				professores e cliente, necessitam também estar prontos 
				para resolver os problemas que surjam durante cada projeto.   
				</p>
			 </div>
			 
			 <div class="col-md-6 col-md-offset-3">
			 <h4 class="circle" align="center">VENDAS</h4>
				<p style="font-size: 17px;">Equipe de vendas é um grupo designado pela empresa para por em circulação e divulgar os serviços prestados, composto por pessoas que saibam conquistar 
				o cliente, com foco em criar relações duradouras com os consumidores, intensificando a procura dos serviços da empresa e fechando bons negócios.</p>
			 </div>

</header>

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
									<button type="submit" class="btn send-btn" style="border-color: #C59A6D; color:white;" >Enviar</button>
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
