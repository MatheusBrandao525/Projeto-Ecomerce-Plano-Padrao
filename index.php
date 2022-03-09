<?php

	session_start();
	include "conexao.php";
	

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
				<section id="header">
					<div class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.php" translate="no">Space info</a></h1>
							<p>Acessorios para PC Gamer, peças e assistencia tecnica.</p>
							<div class="buscar">
								<form action="busca.php" method="get">
									<input type="search" placeholder="BUSCAR PRODUTOS...">
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
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
													<li><a href="#">Phasellus consequat</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a class="icon solid fa-box" href="left-sidebar.php"><span>Produtos</span></a></li>
									<li><a class="icon solid fa-retweet" href="right-sidebar.php"><span>Serviços</span></a></li>
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
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
													<li><a href="#">Phasellus consequat</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a class="icon solid fa-box" href="left-sidebar.php"><span>Produtos</span></a></li>
									<li><a class="icon solid fa-retweet" href="right-sidebar.php"><span>Serviços</span></a></li>
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

							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="detalhes.php" class="image featured"><img src="images/gabinete.jpg" alt="" /></a>
										<header>
											<h3>Gabinete Gamer</h3>
										</header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
										<h4><del>R$ 650,00</del></h4>
										<h4>R$ 500,00</h4>
										<a href="https://web.whatsapp.com/send?phone=556984481680" target="_blank" class="buttonw"><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="detalhes.php" class="image featured"><img src="images/teclado.jpg" alt="" /></a>
										<header>
											<h3>Teclado Mecanico</h3>
										</header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
										<h4>R$ 00,00</h4>
										<a href="#" class="buttonw"><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/mouse.jpg" alt="" /></a>
										<header>
											<h3>Mouse Gamer</h3>
										</header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
										<h4>R$ 00,00</h4>
										<a href="https://web.whatsapp.com/send?phone=5569993217937" target="_blank" class="buttonw"><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>

							</div>

							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/munitor.jpg" alt="" /></a>
										<header>
											<h3>Munitor Gamer</h3>
										</header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
										<h4>R$ 00,00</h4>
										<a href="https://web.whatsapp.com/send?phone=5569993217937" target="_blank" class="buttonw"><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/processador.jpg" alt="" /></a>
										<header>
											<h3>Processadar i9</h3>
										</header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
										<h4>R$ 00,00</h4>
										<a href="https://web.whatsapp.com/send?phone=5569993217937" target="_blank" class="buttonw"><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/placa-video.jpg" alt="" /></a>
										<header>
											<h3>Placa de video</h3>
										</header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
										<h4>R$ 00,00</h4>
										<a href="https://web.whatsapp.com/send?phone=5569993217937" target="_blank" class="buttonw"><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/fone.jpg" alt="" /></a>
										<header>
											<h3>headset gamer</h3>
										</header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
										<h4>R$ 00,00</h4>
										<a href="https://web.whatsapp.com/send?phone=5569984634990" target="_blank" class="buttonw"><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/ssd.jpg" alt="" /></a>
										<header>
											<h3>Ssd 480gb</h3>
										</header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
										<h4>R$ 00,00</h4>
										<a href="https://web.whatsapp.com/send?phone=5569993479744" target="_blank" class="buttonw"><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/fonte.jpg" alt="" /></a>
										<header>
											<h3>Fonte 500w</h3>
										</header>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
										<h4>R$ 00,00</h4>
										<a href="https://web.whatsapp.com/send?phone=5569993075526" target="_blank" class="buttonw "><i class="fab fa-whatsapp"></i> Entre em contato</a>
									</section>

							</div>


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

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="#">Montagem, formatação e manutenção de computadores e impresoras em geral.</a></h2>
											</header>
											<a href="#" class="image featured"><img src="images/original.jpeg" alt="" /></a>
											<h3>Extremo profissionalismo!</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia libero quis interdum commodo.</p>
											<ul class="actions">
												<li><a href="right-sidebar.html" class="button icon solid fa-file">Ver mais</a></li>
											</ul>
										</article>
										

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="#">Sobre nós</a></h2>
											</header>
											<a href="#" class="image featured"><img src="images/localizacao.jpg" alt="" /></a>
											<h3>You should probably check out her work</h3>
											<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit
											ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris
											sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
											Curabitur leo nibh, rutrum malesuada.</p>
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file">Continue Reading</a></li>
											</ul>
										</article>

								</div>

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">

									<!-- Excerpts -->
										<section>
											<ul class="divided">
												<li>
													<h2>Depoimentos</h2>
													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">July 30</span>
																<h3><a href="#">Fulano 1</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">July 28</span>
																<h3><a href="#">Fulano 2</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">July 24</span>
																<h3><a href="#">Fulano 3</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
											</ul>
										</section>

									<!-- Highlights -->
										<section>
											<ul class="divided">
												<li>

													<!-- Highlight -->
														<article class="box highlight">
															<header>
																<h3><a href="#">Nome do Dono</a></h3>
															</header>
															<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
												<li>

													<!-- Highlight -->
														<article class="box highlight">
															<header>
																<h3><a href="#">Something of less note</a></h3>
															</header>
															<a href="#" class="image left"><img src="images/pic07.jpg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
											</ul>
										</section>

								</div>

						</div>
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