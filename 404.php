<!doctype html>
<html lang="en">
	<head>
		<?php
			include ("include_head.php");
		?>
		<link rel="stylesheet" href="css/404.css">
	</head>
	<body id="404_page">
		<div id="div_header_img">
			<img id="header_image" src="img/landscape_header.jpg" alt="Grand Teton by Romain Guy"></img>
			<!-- Photo by Romain Guy, I've modified it a bit. Original: http://www.curious-creature.org/2012/09/03/grand-teton/ -->
		</div>
		<div>
			<?php
				include ("include_header.php");
			?>
			<div id="content">
				<hgroup class="fade-in zero">
					<h1>Oh no! 404 error</h1>
					<h2>Sorry but the page you requested does not exist<br /> and that makes the Nyan Cat sad... :'(</h2>
				</hgroup>
				<img id="sad_nyan_cat" class="fade-in one" src="img/sad_nyan_cat.gif" alt="Sad Nyan Cat"></img>
			</div>
			<?php
				include ("include_footer.php");
			?>
		</div>
	</body>
</html>
