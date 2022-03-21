<?php

	session_start();
	include "conexao.php";
	
	$consultaCat = $cn->query("select * from tbl_categoria");

	$consultaDepoimento = $cn->query("SELECT nome_usuario, dsp_email, dsp_depoimento, date_format(ds_data, '%d/%m/%Y') AS ds_data FROM tbl_depoimento");

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
			<section id="header" style="border-bottom:none; max-height:100px;">
					<div class="container" style="border-bottom:none; max-height:100px;">

						<!-- Logo --
							<h1 id="logo"><a href="index.php">Space info</a></h1>
							<p>Acessorios para PC Gamer, peças e assistencia tecnica.</p>

						<!-- Nav -->
						<?php if(empty($_SESSION['ID'])) { ?>
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href="index.php"><span>Home</span></a></li>
									<li>
										<a href="#" class="icon solid fa-sitemap"><span>Categorias</span></a>
										<ul>
											<?php while($exibecat = $consultaCat->fetch(PDO::FETCH_ASSOC)) { ?>
												<li><a href="categoria.php?cat=<?php echo $exibecat['id_categoria'];?>"><?php echo $exibecat['nome_categoria'];?></a></li>
											<?php } ?>
										</ul>
									</li>
									<li><a class="icon solid fa-box" href="right-sidebar.php"><span>Serviços</span></a></li>
									<li><a class="icon solid fa-retweet" href="left-sidebar.php"><span>Sobre Nós</span></a></li>
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
											<?php while($exibecat = $consultaCat->fetch(PDO::FETCH_ASSOC)) { ?>
												<li><a href="categoria.php?cat=<?php echo $exibecat['id_categoria'];?>"><?php echo $exibecat['nome_categoria'];?></a></li>
											<?php } ?>
										</ul>
									</li>
									<li><a class="icon solid fa-box" href="right-sidebar.php"><span>Serviços</span></a></li>
									<li><a class="icon solid fa-retweet" href="left-sidebar.php"><span>Sobre Nós</span></a></li>
									<li><a class="icon solid fa-cog" href="adm-panel.php"><span>Administrador</span></a></li>
									<li><a class="icon solid fa-cog" href="sair.php"><span>sair</span></a></li>
								</ul>
							</nav>
						<?php } ?>

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

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">

									<!-- Excerpts -->
										<section>
											<ul class="divided">
											<h2>Depoimentos</h2>
											<?php while($exibeDepoimento = $consultaDepoimento->fetch(PDO::FETCH_ASSOC)) { ?>
												<li>


													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date"><?php echo $exibeDepoimento["ds_data"];?></span>
																<h3><a href="#"><?php echo $exibeDepoimento['nome_usuario'];?></a></h3>
															</header>
															<p><?php echo $exibeDepoimento['dsp_depoimento'];?></p>
														</article>

												</li>
											<?php } ?>

											</ul>
										</section>
									

								</div>

						</div>
					</div>
			</section>

<?php 

include 'footer.php';

?>