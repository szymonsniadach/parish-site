<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="robots" content="noindex,nofollow">
	<title>Parafia pw. św. Jadwigi Królowej w Białymstoku</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate-hover.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.min.css">

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>

	<header class="navbar">
		<div class="container container--navbar">

			<a href="/">
				<img src="img/logo.png" class="logo" alt="Logo">
			</a>

			<nav class="navigation__nav">
				<ol class="navigation__list">
					<li class="navigation__item">
						<a href="<?php echo base_url(''); ?>" class="navigation__link">Strona główna</a>
					</li>
					<li class="navigation__item">
						<a href="#" class="navigation__link">Ogłoszenia</a>
					</li>
					<li class="navigation__item">
						<a href="#" class="navigation__link">Parafia</a>
						<div class="navigation__list dropdown">

							<div class="navigation__item dd">
								<a href="#">test 1</a>
								<div class="navigation__list dropdown">
									<div class="navigation__item">
										<a href="#">test 1</a>
									</div>
									<div class="navigation__item">
										<a href="#" class="">test 2</a>
									</div>
								</div>
							</div>

							<div class="navigation__item dd">
								<a href="#">test 2</a>
								<div class="navigation__list dropdown">

									<div class="navigation__item">
										<a href="#">test 1</a>
									</div>

									<div class="navigation__item dd">
										<a href="#" class="">test 2</a>
										<div class="navigation__list dropdown">
											<div class="navigation__item">
												<a href="#">test 1</a>
											</div>
											<div class="navigation__item">
												<a href="#" class="">test 2</a>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>

					</li>
					<li class="navigation__item">
						<a href="#contact" class="navigation__link">Grupy</a>
					</li>
					<li class="navigation__item">
						<a href="#contact" class="navigation__link">Galeria</a>
					</li>
					<li class="navigation__item">
						<a href="#contact" class="navigation__link">Kontakt</a>
					</li>
				</ol>
			</nav><!-- end desktop navbar -->

			<div class="navi">
				<input class="navi__checkbox" id="navi-toggle" type="checkbox">
				<label class="navi__button" for="navi-toggle">
					<span class="navi__icon">&nbsp;</span>
				</label>
				<div class="navi__background">&nbsp;</div>
				<nav class="navi__nav">
					<ol class="navi__list">
						<li class="navi__item">
							<a href="#" class="center navi__link navi__link-js">Strona główna</a>
						</li>
						<li class="navi__item">
							<a href="#" class="center navi__link navi__link-js">Ogłoszenia</a>
						</li>
						<li class="navi__item">
							<a href="#" class="center navi__link navi__link-js">Parafia</a>
						</li>
						<li class="navi__item">
							<a href="#" class="center navi__link navi__link-js">Grupy</a>
						</li>
						<li class="navi__item">
							<a href="#" class="center navi__link navi__link-js">Galeria</a>
						</li>
						<li class="navi__item">
							<a href="#" class="center navi__link navi__link-js">Kontakt</a>
						</li>
					</ol>
				</nav>
			</div><!-- end mobile navbar -->

		</div>
	</header>