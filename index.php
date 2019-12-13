<?php  include("header.php");
include("nav.php");?>
	<!-- Banner -->
	<section id="banner">
		<i class="icon fa-diamond"></i>
		<h2>build the perfect event</h2>
		<p>we help you to do it eazy !</p>
		<ul class="actions">
			<li><a href="about.php" class="button big special">how ?</a></li>
		</ul>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style1">
		<div class="inner">
			<article class="feature left">
				<span class="image"><img src="images/pic01.jpg" alt="" /></span>
				<div class="content">
					<h2>rendrez votre vie plus animée</h2>
					<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu
						augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
					<ul class="actions">
						<li>
							<a href="about.php" class="button alt">More</a>
						</li>
					</ul>
				</div>
			</article>
			<article class="feature right">
				<span class="image"><img src="images/pic02.jpg" alt="" /></span>
				<div class="content">
					<h2>faire la publicité de votre mouvement</h2>
					<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu
						augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
					<ul class="actions">
						<li>
							<a href="about.php" class="button alt">More</a>
						</li>
					</ul>
				</div>
			</article>
		</div>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper special">
		<div class="inner">
			<header class="major narrow">
				<h2>events made by Event Maker</h2>
				<p>join us to help you build yours and become a member of our society</p>
			</header>
			<div class="image-grid">
				<a href="#" class="image"><img src="images/4.jpg" alt="" /></a>
				<a href="#" class="image"><img src="images/2.jpg" alt="" /></a>
				<a href="#" class="image"><img src="images/3.jpg" alt="" /></a>
				<a href="#" class="image"><img src="images/4.jpg" alt="" /></a>
				<a href="#" class="image"><img src="images/5.jpg" alt="" /></a>
				<a href="#" class="image"><img src="images/3.jpg" alt="" /></a>
				<a href="#" class="image"><img src="images/2.jpg" alt="" /></a>
				<a href="#" class="image"><img src="images/5.jpg" alt="" /></a>
			</div>
			<ul class="actions">
				<li><a href="sortevents.php" class="button big alt">see all events</a></li>
			</ul>
		</div>
	</section>

	<!-- Three -->
	<section id="three" class="wrapper style3 special">
		<div class="inner">
			<header class="major narrow	">
				<h2>join us</h2>
				<p>become a member of our society to get more sponsors</p>
			</header>
			<ul class="actions">
				<li><a href="signup.php" class="button big alt">sign up now</a></li>
			</ul>
		</div>
	</section>

	<!-- Four -->
	<section id="four" class="wrapper style2 special">
		<div class="inner">
			<header class="major narrow">
				<h2>Get in touch</h2>
				<p>send us a message via e-mail</p>
			</header>
			<form action="contacter.php" method="POST">
				<div class="container 75%">
					<div class="row uniform 50%">
						<div class="6u 12u$(xsmall)">
							<input name="name" placeholder="Name" type="text" />
						</div>
						<div class="6u$ 12u$(xsmall)">
							<input name="email" placeholder="Email" type="email" />
						</div>
						<div class="12u$">
							<textarea name="message" placeholder="Message" rows="4"></textarea>
						</div>
					</div>
				</div>
				<ul class="actions">
					<li><input type="submit" class="special" value="Submit" /></li>
					<li><input type="reset" class="alt" value="Reset" /></li>
				</ul>
			</form>
		</div>
	</section>

	<?php  include("footer.php")?>