<?php

$contact_phone = 'tel:+421900111222';
$contact_email = 'email@mailinator.com';

?>

<header>
		<div class="contact-bar">
			<div class="container">
				<ul class="menu personal">
					<li><i class="fa fa-phone"></i><a href="<?= $contact_phone ?>"><?= $contact_phone ?></a></li>
					<li><i class="fa fa-envelope"></i><a href="<?= $contact_email ?>"><?= $contact_email ?></a></li>
				</ul>
				<ul class="menu social">
					<li><a href="#" class="social-icon"><i class="fa fa-github"></i></a></li>
					<li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="nav-bar">
			<div class="container">
				<h1 class="logo">
					<a href="#">
						<strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
					</a>
				</h1>

				<nav class="group">
					<ul class="menu navigation">
						<li><a href="index.php"><i class="fa fa-shield fa-2x"></i> Domov</a></li>
						<li class="selected"><a href="portfolio.html"><i class="fa fa-leaf fa-2x"></i> Portfolio</a></li>
						<li><a href="about.php"><i class="fa fa-bolt fa-2x"></i> O nás</a></li>
						<li><a href="contact.php"><i class="fa fa-trophy fa-2x"></i> Kontakt</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>