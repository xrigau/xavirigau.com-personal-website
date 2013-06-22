<!doctype html>
<html lang="en">
	<head>
		<?php
			// Issue with Lightbox and IE, see include_head.php for more info on this.
			$isPortfolio = "1";
			include ("include_head.php");
		?>
		<link rel="stylesheet" href="css/portfolio.css">
		<link rel="stylesheet" href="css/lightbox.css" >
	</head>
	<body id="portfolio_page">
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
					<h1>Portfolio</h1>
				</hgroup>
				<ol id="projects_list">
					<li class="fade-in zero">
						<div>
							<p>Some projects I've taken part:</p>
						</div>
					</li>
					<li class="fade-in zero">
						<div>
							<h3>Strawberry SDK</h3>
							<p>This is the most interesting project I've taken part. Strawberry SDK is a cross-platform framework that allows developers to write an application or game and run it on Android, iOS and Mac OS X. In NO2 I was part of the Strawberry SDK development team. I focused on both the Android and the common code. I also wrote the Strawberry Player (a tool for previewing layouts) and a beta version of Strawberry for BlackBerry 10 OS.</p>
							<div>
								<a href="img/screenshots/strawberry_splash.png" rel="lightbox[strawberry]" title="Strawberry SDK"><img class="screenshot_thumbnail" src="img/thumbnails/strawberry_splash.png"></img></a>
								<a href="img/screenshots/strawberry_player_landscape.png" rel="lightbox[strawberry]" title="Strawberry Player"><img class="screenshot_thumbnail" src="img/thumbnails/strawberry_player_landscape.png"></img></a>
								<a href="img/screenshots/strawberry_player_portrait.png" rel="lightbox[strawberry]" title="Strawberry Player"><img class="screenshot_thumbnail" src="img/thumbnails/strawberry_player_portrait.png"></img></a>
							</div>
							<p class="link_right"><a class="portfolio_link" href="http://www.strawberrysdk.com">Visit the website</a></p>
						</div>
					</li>
					<li class="fade-in one">
						<div>
							<h3>FCB ToonsTown</h3>
							<p>This game was made with Strawberry SDK. I didn't participate on the development of the game itself, but I helped to fix some bugs on Android and I implemented In-App purchases using Google's SDK (for Google Play) and Amazon's SDK (for the Amazon App Store).</p>
							<div>
								<a href="https://lh3.ggpht.com/YG-UDtWZsyW3Swets2dAjIMSm1krfssv8uRNryFWjDaxMFVel7c0DdBOHU4ayWsJeg=h480" rel="lightbox[fcbtoons]" title="FCB ToonsTown"><img class="screenshot_thumbnail" src="https://lh3.ggpht.com/YG-UDtWZsyW3Swets2dAjIMSm1krfssv8uRNryFWjDaxMFVel7c0DdBOHU4ayWsJeg=h120"></img></a>
								<a href="https://lh3.ggpht.com/KVJcfvASPBH9x5YCeCFEr4aXwm8erst_myMcOEmvcbTDlBRkjBI6lIZDh1FX-XQSa3WW=h480" rel="lightbox[fcbtoons]" title="FCB ToonsTown"><img class="screenshot_thumbnail" src="https://lh3.ggpht.com/KVJcfvASPBH9x5YCeCFEr4aXwm8erst_myMcOEmvcbTDlBRkjBI6lIZDh1FX-XQSa3WW=h120"></img></a>
								<a href="https://lh6.ggpht.com/UyNZFbpoWYPZHbSGhehAYI0dCsZhtaZvf79nlU6q6ne7ts5XI3bFqTMSKPFylvhg48xK=h480" rel="lightbox[fcbtoons]" title="FCB ToonsTown"><img class="screenshot_thumbnail" src="https://lh6.ggpht.com/UyNZFbpoWYPZHbSGhehAYI0dCsZhtaZvf79nlU6q6ne7ts5XI3bFqTMSKPFylvhg48xK=h120"></img></a>
							</div>
							<p class="link_right"><a class="portfolio_link" href="https://play.google.com/store/apps/details?id=es.no2.fcbtoonstown">FCB ToonsTown on Google Play</a></p>
						</div>
					</li>
					<li class="fade-in one">
						<div>
							<h3>blueKiwi for Android</h3>
							<p>This was a big project. When blueKiwi software was acquired by AtoS, we had to create the mobile application, so I took part of the development of the mobile application from the beginning. We used agile methodologies during the development, because we were asked for fast and regular releases and we had to work close to the iOS and BlackBerry development team. Interesting things: OAuth (kind of) login, huge Json usage (integration with third-party library).</p>
							<div>
								<a href="https://lh4.ggpht.com/Bff8VO6jPzHvFwMMVZp4sQu6wF6DSmg1ssyJi4wHG4iXnlusjOJyoU1mTZp5HJrKsL0=h480" rel="lightbox[bluekiwi_android]" title="blueKiwi for Android"><img class="screenshot_thumbnail" src="https://lh4.ggpht.com/Bff8VO6jPzHvFwMMVZp4sQu6wF6DSmg1ssyJi4wHG4iXnlusjOJyoU1mTZp5HJrKsL0=h120"></img></a>
								<a href="https://lh4.ggpht.com/h_UIqkTkbSuvou2CNmK9ofE_sHSvsGA5mCHCNHtR8zv3a9XjvE_UPcaY1LuXFQfL7sw=h480" rel="lightbox[bluekiwi_android]" title="blueKiwi for Android"><img class="screenshot_thumbnail" src="https://lh4.ggpht.com/h_UIqkTkbSuvou2CNmK9ofE_sHSvsGA5mCHCNHtR8zv3a9XjvE_UPcaY1LuXFQfL7sw=h120"></img></a>
								<a href="https://lh5.ggpht.com/HarH7_mqbZLYTbnSRJyofqtm_TpllIZcjG7rA-3yG1RoJzCpArq_cUkNxu3RDgxWfw=h480" rel="lightbox[bluekiwi_android]" title="blueKiwi for Android"><img class="screenshot_thumbnail" src="https://lh5.ggpht.com/HarH7_mqbZLYTbnSRJyofqtm_TpllIZcjG7rA-3yG1RoJzCpArq_cUkNxu3RDgxWfw=h120"></img></a>
							</div>
							<p class="link_right"><a class="portfolio_link" href="https://play.google.com/store/apps/details?id=com.tempos21.bluekiwi">blueKiwi on Google Play</a></p>
						</div>
					</li>
					<li class="fade-in one">
						<div>
							<h3>blueKiwi for BlackBerry</h3>
							<p>While I was working on blueKiwi for Android, I had the chance to write some code for the  BlackBerry version. This was interesting, since I hadn't worked with BlackBerry before that, so I learnt a lot! Had to get familiar with the BlackBerry 5 and 6 API and Java 1.4 in short time.</p>
							<div>
								<a href="img/screenshots/bluekiwi_blackberry_1.png" rel="lightbox[bluekiwi_blackberry]" title="blueKiwi for BlackBerry"><img class="screenshot_thumbnail" src="img/thumbnails/bluekiwi_blackberry_1.png"></img></a>
								<a href="img/screenshots/bluekiwi_blackberry_2.png" rel="lightbox[bluekiwi_blackberry]" title="blueKiwi for BlackBerry"><img class="screenshot_thumbnail" src="img/thumbnails/bluekiwi_blackberry_2.png"></img></a>
								<a href="img/screenshots/bluekiwi_blackberry_3.png" rel="lightbox[bluekiwi_blackberry]" title="blueKiwi for BlackBerry"><img class="screenshot_thumbnail" src="img/thumbnails/bluekiwi_blackberry_3.png"></img></a>
							</div>
							<p class="link_right"><a class="portfolio_link" href="http://appworld.blackberry.com/webstore/content/19087305/">blueKiwi on BlackBerry World</a></p>
						</div>
					</li>
					<li class="fade-in two">
						<div>
							<h3>mCatalog for Android</h3>
							<p>This is my Final Degree Project. One of the designers at Tempos 21 created the design of the application and I wrote all the code. This is a virtual catalog app for Android tablets. It's split into two parts: Landscape and Portrait. In Portrait mode, the app shows a fast way to navigate through the list of products and a shopping chart, that a dealer might find easy-to-use. In Landscape mode, it displays a nice UI that attracts customer's attention. More interesting suff here: orientation handling with fragments, third-party libraries integration, drag-and-drop functionallity and I had to deal with lots of memory issues.</p>
							<div>
								<a href="img/screenshots/fdp_products_list.png" rel="lightbox[mcatalog]" title="mCatalog for Android"><img class="screenshot_thumbnail" src="img/thumbnails/fdp_products_list.png"></img></a>
								<a href="img/screenshots/fdp_parallax_1.png" rel="lightbox[mcatalog]" title="mCatalog for Android"><img class="screenshot_thumbnail" src="img/thumbnails/fdp_parallax_1.png"></img></a>
								<a href="img/screenshots/fdp_compare.png" rel="lightbox[mcatalog]" title="mCatalog for Android"><img class="screenshot_thumbnail" src="img/thumbnails/fdp_compare.png"></img></a>
							</div>
							<p class="link_right"><a class="portfolio_link" href="http://xavirigau.com/apk/pfc_xavi.apk">Download the APK file</a></p>
						</div>
					</li>
					<li class="fade-in two">
						<div>
							<h3>A prop d'aqui</h3>
							<p>I lead the development of this application. I was put a trainee in charge, so it was interesting for me to have this experience in which I could develop the app and be responsible of the trainee's work. Some interesing things here: ActionBar, MapView with Fragments, integration with an Augmented Reality library, DB persistance. This project was made for Barcelona City Council.</p>
							<div>
								<a href="https://lh6.ggpht.com/GILTNvyCXb2hmTre8Y0mYjZTOd8uMYf3CI9H5Yg9C0aF0_aO8tk4XKW_3EDNry9kvCQ=h480" rel="lightbox[apropdaqui]" title="A prop d'aqui"><img class="screenshot_thumbnail" src="https://lh6.ggpht.com/GILTNvyCXb2hmTre8Y0mYjZTOd8uMYf3CI9H5Yg9C0aF0_aO8tk4XKW_3EDNry9kvCQ=h120"></img></a>
								<a href="https://lh3.ggpht.com/0bDbHW7SwX33gnBPEsIRE9qUaGb4KKuY0pe-xpB9Xo-NelvwpWpZwN4LDySD8uxdO0Q=h480" rel="lightbox[apropdaqui]" title="A prop d'aqui"><img class="screenshot_thumbnail" src="https://lh3.ggpht.com/0bDbHW7SwX33gnBPEsIRE9qUaGb4KKuY0pe-xpB9Xo-NelvwpWpZwN4LDySD8uxdO0Q=h120"></img></a>
								<a href="https://lh6.ggpht.com/HsvKCmpeZ5_cYNV4A3egjAM_GqSSqBU-IAc56bAMkYDCVnaQxby57Qmd_eAP8qWzaBk=h480" rel="lightbox[apropdaqui]" title="A prop d'aqui"><img class="screenshot_thumbnail" src="https://lh6.ggpht.com/HsvKCmpeZ5_cYNV4A3egjAM_GqSSqBU-IAc56bAMkYDCVnaQxby57Qmd_eAP8qWzaBk=h120"></img></a>
							</div>
							<p class="link_right"><a class="portfolio_link" href="https://play.google.com/store/apps/details?id=cat.bcn.apropdaqui">A prop d'aqui on Google Play</a></p>
						</div>
					</li>
					<li class="fade-in three">
						<div>
							<h3>BCN Cultural</h3>
							<p>I wrote this project from scratch. I had to implement the Android version of this app, since the iOS one was already made, so I had to do everything based in the iOS version. I learnt a lot, since I was alone in this project. Had to do some tricky UI hacks and memory optimizations. This project was made for Barcelona City Council.</p>
							<div>
								<a href="https://lh6.ggpht.com/llBL5XDWcUCqXXDYpxyYZg4mc5fZyj1m2WyqvPc48SyHczQdYLmmQuisDHm1Q5JSTwU=h480" rel="lightbox[bcncultural]" title="BCN Cultural"><img class="screenshot_thumbnail" src="https://lh6.ggpht.com/llBL5XDWcUCqXXDYpxyYZg4mc5fZyj1m2WyqvPc48SyHczQdYLmmQuisDHm1Q5JSTwU=h120"></img></a>
								<a href="https://lh5.ggpht.com/bgvF8Sjdr55Lv_nHX5Gfcbd6BE7KPp3ZlDeMeu0OPhyodGi9OjgKNiuQgljFkZY8ipY=h480" rel="lightbox[bcncultural]" title="BCN Cultural"><img class="screenshot_thumbnail" src="https://lh5.ggpht.com/bgvF8Sjdr55Lv_nHX5Gfcbd6BE7KPp3ZlDeMeu0OPhyodGi9OjgKNiuQgljFkZY8ipY=h120"></img></a>
								<a href="https://lh3.ggpht.com/ddYDjK0EYWVpqifa4n32RU9yUggJv9xHnS7jajv3t50W1a-1MWwKb-cRYTsDGd7fbawF=h480" rel="lightbox[bcncultural]" title="BCN Cultural"><img class="screenshot_thumbnail" src="https://lh3.ggpht.com/ddYDjK0EYWVpqifa4n32RU9yUggJv9xHnS7jajv3t50W1a-1MWwKb-cRYTsDGd7fbawF=h120"></img></a>
							</div>
							<p class="link_right"><a class="portfolio_link" href="https://play.google.com/store/apps/details?id=cat.bcn.bcncultural">BCN Cultural on Google Play</a></p>
						</div>
					</li>
					<li class="fade-in three">
						<div>
							<h3>Travel Club App</h3>
							<p>I got in touch with a big project for the first time with this one. I learnt a lot about how to separate things in different layers in order to make more structured and mantainable code. I also had to do some UI customizations since the app designer was asking for some non-standard UI components.</p>
							<div>
								<a href="https://lh5.ggpht.com/5a5y_XUkXh4YrDUIrUWyhtH97S8BdqlHKLkc2nv3WGXfnVbs2OOlkHZKTGSS1HE_Prg=h480" rel="lightbox[travelclubapp]" title="Travel Club App"><img class="screenshot_thumbnail" src="https://lh5.ggpht.com/5a5y_XUkXh4YrDUIrUWyhtH97S8BdqlHKLkc2nv3WGXfnVbs2OOlkHZKTGSS1HE_Prg=h120"></img></a>
								<a href="https://lh5.ggpht.com/cPH9mTyDd4GExYmag5ehUJayLgLqF30AW0dQeFn8aPsBvHcVOs5kN4pEM5U1LSvwdRY=h480" rel="lightbox[travelclubapp]" title="Travel Club App"><img class="screenshot_thumbnail" src="https://lh5.ggpht.com/cPH9mTyDd4GExYmag5ehUJayLgLqF30AW0dQeFn8aPsBvHcVOs5kN4pEM5U1LSvwdRY=h120"></img></a>
								<a href="https://lh5.ggpht.com/lPQ69Fja3csSCtmRT1pBti0AHuX7R1siyU0MCaCplRgWeZbje0ADCyoyGLA6WxrRoH7M=h480" rel="lightbox[travelclubapp]" title="Travel Club App"><img class="screenshot_thumbnail" src="https://lh5.ggpht.com/lPQ69Fja3csSCtmRT1pBti0AHuX7R1siyU0MCaCplRgWeZbje0ADCyoyGLA6WxrRoH7M=h120"></img></a>
							</div>
							<p class="link_right"><a class="portfolio_link" href="https://play.google.com/store/apps/details?id=es.tempos21.travel">Travel Club App on Google Play</a></p>
						</div>
					</li>
					<li class="fade-in three">
						<div>
							<h3>B&uacute;stia Ciutadana</h3>
							<p>I got familiar with the Android programming environment whith this application, as this was the first project I was assigned when I joined Tempos 21. First I helped implementing some small parts, and doing some bug-fixing. Pretty much a regular Android application (HTTP requests, XML parsing, some DB functionallity and a MapView). This project was made for Barcelona City Council.</p>
							<div>
								<a href="https://lh5.ggpht.com/juJf9JdEWz-8uPB30BCQSiOXh__TG8bYC_Nn-E9IJMbyh8M_suekMWR_UwcFbqJUz53u=h480" rel="lightbox[bustiaciutadana]" title="B&uacute;stia Ciutadana"><img class="screenshot_thumbnail" src="https://lh5.ggpht.com/juJf9JdEWz-8uPB30BCQSiOXh__TG8bYC_Nn-E9IJMbyh8M_suekMWR_UwcFbqJUz53u=h120"></img></a>
								<a href="https://lh6.ggpht.com/qT9DNjr75CAE6fXbOQuvRxpY7NQ3if4a0-OypCUUfA2nHM8ff9jJnxWzmuRzYdbFAho=h480" rel="lightbox[bustiaciutadana]" title="B&uacute;stia Ciutadana"><img class="screenshot_thumbnail" src="https://lh6.ggpht.com/qT9DNjr75CAE6fXbOQuvRxpY7NQ3if4a0-OypCUUfA2nHM8ff9jJnxWzmuRzYdbFAho=h120"></img></a>
								<a href="https://lh6.ggpht.com/02VvNN7o0Iya6SUJkg0iXEdok6ltR1mZh_8XZQstY4HE1IvVM8HqFXaDkDSvr6FPXM-T=h480" rel="lightbox[bustiaciutadana]" title="B&uacute;stia Ciutadana"><img class="screenshot_thumbnail" src="https://lh6.ggpht.com/02VvNN7o0Iya6SUJkg0iXEdok6ltR1mZh_8XZQstY4HE1IvVM8HqFXaDkDSvr6FPXM-T=h120"></img></a>
							</div>
							<p class="link_right"><a class="portfolio_link" href="https://play.google.com/store/apps/details?id=es.tempos21.bustia">B&uacute;stia Ciutadana on Google Play</a></p>
						</div>
					</li>
				</ol>
			</div>
			<script src="js/jquery-1.7.2.min.js"></script>
			<script src="js/lightbox.js"></script>
			<?php
				include ("include_footer.php");
			?>
		</div>
	</body>
</html>
