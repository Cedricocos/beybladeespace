<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Accueil | Beyblade Espace</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
		<script src="https://kit.fontawesome.com/3a8580db81.js" crossorigin="anonymous"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 class="h1"><img src="{{ asset('images/BE_logo.svg') }}" id="logo"><a href="/">BEYBLADE ESPACE</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="/">Accueil</a></li>
							<li>
								<a href="/bakuten">Bakuten</a>
								<ul>
									<li><a href="/bakuten/manga">Animé - Manga</a></li>
									<li><a href="/bakuten/beys">Beys</a></li>
									<li><a href="/bakuten/jeux">Jeux-Vidéos</a></li>
                                </ul>
							</li>
							<li>
								<a href="/metal">Metal</a>
								<ul>
									<li><a href="/metal/manga">Animé - Manga</a></li>
									<li><a href="/metal/beys">Beys</a></li>
									<li><a href="/metal/jeux">Jeux-Vidéos</a></li>
                                </ul>
							</li>
							<li>
								<a href="index.html">Burst</a>
								<ul>
									<li><a href="pages/left-sidebar.html">Animé - Manga</a></li>
									<li><a href="pages/right-sidebar.html">Beys</a></li>
									<li><a href="pages/no-sidebar.html">Jeux-Vidéos</a></li>
									
								</ul>
							</li>
							<li><a href="index.html">Spin-off</a></li>
							<li><a href="index.html">Forum</a></li>
							<li><a href="/actualites">Actualité</a></li>
							<li><a href="/actualites/nouveau">Creer Actualité</a></li>
							<li><a href="#" class="button primary">Se connecter</a></li>
						</ul>
					</nav>
				</header>
				<div class="contentTemplate">
                @yield('content')
				</div>
            <!-- Newsletter -->
				<section id="newslet" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2 class="black bold">Abonnez-vous pour ne rien manquer !</h2>
						</header>
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Mettez votre email ici" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="S'abonner" class="fit primary" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://twitter.com/beyblade_espace" class="icon brands alt fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/beyblade.espace.officiel/" class="icon brands alt fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/beyblade_espace/" class="icon brands alt fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						<li><a href="https://www.youtube.com/channel/UClogoypOd7FGst3E_1nIjNw" class="icon brands alt fa-youtube" target="_blank"><span class="label">Youtube</span></a></li>
						<li><a href="https://open.spotify.com/show/2IrIvye5QlPxiVyXyABEg7" class="icon solid alt" target="_blank"><i class="fab fa-spotify big"></i></a></li>
						<li><a href="https://discord.com/invite/HZEpzZ3" class="icon solid alt" target="_blank"><i class="fab fa-discord big"></i></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Beyblade Espace. Tout droits réservés.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.dropotron.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>
