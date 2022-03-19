<?php

	session_start();
	include "conexao.php";
	
	$consultaCat = $cn->query("select * from tbl_categoria");
	$consultaProduto = $cn->query("SELECT id_produto, nome_produto, imagen_produto, id_categoria, descricao, vl_produto FROM tbl_produto");


?>
<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pt-br" translate="no">
	<head>
		<title>Space info</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel = " stylesheet " href = " https://use.fontawesome.com/079d72ad8e.css " >
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="borabora2">
					<div class="container fundo">

						<!-- Logo -->
							<div class="blurr">
								<h1 id="logo" style="margin-top:-55px;" class="titulo"><a href="index.php" translate="no">Space info</a></h1>
							</div>
							<div class="blur">
								<p class="paragrafo">Acessorios para PC Gamer, peças e assistencia tecnica.</p>
							</div>
							<div class="buscar">
								<form action="busca.php" method="get">
									<input type="search" name="txtbuscar" placeholder="BUSCAR PRODUTOS...">
									<button class="buttonww" >Buscar</button>
								</form>
							</div>
						<!-- Nav -->
						<?php if(empty($_SESSION['ID'])) { ?>
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href="index.php"><span>Home</span></a></li>
									<li>
										<a href="#" class="icon solid fa-sitemap"><span>Categorias</span></a>
										<ul>
											<?php while($listaCat = $consultaCat->fetch(PDO::FETCH_ASSOC)) { ?>
												<li><a href="categoria.php?cat=<?php echo $listaCat['id_categoria'];?>"><?php echo $listaCat['nome_categoria'];?></a></li>
											<?php } ?>	
										</ul>
									</li>
									<li><a class="icon solid fa-box" href="right-sidebar.php"><span>Serviços</span></a></li>
									<li><a class="icon solid fa-retweet" href="left-sidebar.php"><span>Sobre nós</span></a></li>
									<li><a class="icon solid fa-cog" href="no-sidebar.php"><span>Entrar</span></a></li>
								</ul>
							</nav>
						<?php } else{ ?>
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href="index.php"><span>Home</span></a></li>
									<li>
										<a href="#" class="icon solid fa-sitemap"><span>Categorias</span></a>
										<ul>
											<?php while($listaCat = $consultaCat->fetch(PDO::FETCH_ASSOC)) { ?>
												<li><a href="categoria.php?cat=<?php echo $listaCat['id_categoria'];?>"><?php echo $listaCat['nome_categoria'];?></a></li>
											<?php } ?>	
										</ul>
									</li>
									<li><a class="icon solid fa-box" href="right-sidebar.php"><span>Serviços</span></a></li>
									<li><a class="icon solid fa-retweet" href="left-sidebar.php"><span>Sobre nós</span></a></li>
									<li><a class="icon solid fa-cog" href="adm-panel.php"><span>Administrador</span></a></li>
									<li><a class="icon solid fa-cog" href="sair.php"><span>sair</span></a></li>
								</ul>
							</nav>
						<?php } ?>

					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
							<h2>Produtos em destaque na <strong>Space info</strong>!</h2>
						</header>
						<div class="row aln-center">

						<?php while($exibeProd = $consultaProduto->fetch(PDO::FETCH_ASSOC)) { ?>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="detalhes.php?id=<?php echo $exibeProd['id_produto'];?>&idcat=<?php echo $exibeProd['id_categoria'];?>" class="image featured"><img src="assets/css/images/<?php echo $exibeProd['imagen_produto'];?>" alt="" /></a>
										<header>
											<h3><?php echo $exibeProd['nome_produto'];?></h3>
										</header>
										<p style="text-align:left;"><?php echo mb_strimwidth($exibeProd['descricao'],0,97,'...');?></p>
										<h4>R$ <?php echo number_format($exibeProd['vl_produto'],2,',','.');?></h4>
										<a href="https://web.whatsapp.com/send?phone=556984481680" target="_blank" class="buttonw"><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>
							</div>
						<?php } ?>

							<div class="col-12">
								<ul class="actions">
									<li><a href="left-sidebar.php" class="button icon solid fa-file">Ver mais Produtos</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner">
					<div class="container">
						<p>Um slogan da empresa..</p>
					</div>
				</section>


			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>Questões ou comentarios? <strong>entrar em contato:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<form method="post" action="#">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="Name" type="text" />
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="text" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
											<div class="col-12">
												<a href="#" class="form-button-submit button icon solid fa-envelope">Enviar</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet
									mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur
									leo nibh, rutrum eu malesuada.</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon solid fa-home">
													1234 Somewhere Road<br />
													Nashville, TN 00000<br />
													USA
												</li>
												<li class="icon solid fa-phone">
													(000) 000-0000
												</li>
												<li class="icon solid fa-envelope">
													<a href="#">info@untitled.tld</a>
												</li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon brands fa-twitter">
													<a href="#">@untitled</a>
												</li>
												<li class="icon brands fa-instagram">
													<a href="#">instagram.com/untitled</a>
												</li>
												<li class="icon brands fa-dribbble">
													<a href="#">dribbble.com/untitled</a>
												</li>
												<li class="icon brands fa-facebook-f">
													<a href="#">facebook.com/untitled</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Desenvolvedor: <a href="#">MATHEUS F. BRANDÃO</a></li>
						</ul>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>