<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="luca, scarci, interaction design, design, sheridan college, student, designer, luca scarci,">
		<title>title</title>
		<link rel="stylesheet" href="styles/core.css">
		<link rel="stylesheet" href="fonts/fonts.css">
	 </head>
	<body>
		<div class="main-container">

			 <?php require 'nav.php';?>


			<div class="switch next"><a href="#">Next Project</a></div>
		 
			<div class="switch previous"><a href="#">previous Project</a></div>
	

			<div class="page__header page__header--mobile">

			<div class="page__header page__header--title">The Rising Tide</div>
			<a class="page__header--return" href="../work.php">< RETURN TO WORK</a>
			
		</div>


		<div class="project">
			<div class="project__hero"></div>

			<div class="project__info">
			<div class="project__info project__info--title">THE RISING TIDE</div>
			<div class="project__info project__info--date">2017 | INTERACTIVE</div>
					<div class="project__info--break"></div>
						<div class="project__info project__info--left">
							<ul class="project__info project__info--list">
								<li class="project__info project__info--item">LENGTH: 12 WEEKS</li>
								<li class="project__info project__info--item">TOOLs: HTML/CSS/js + WebGL</li>
								<li class="project__info project__info--item">other:</li>
							</ul>
						</div>
						<div class="project__info project__info--right">
							<ul class="project__info project__info--links">
								<li class="project__info--item">Links</li>
								<li class="project__info--item"><a class="item-link" href="#">> risingtide.ca</a></li>
								<li class="project__info--item"><a class="item-link" href="#">> 350.org</a></li>
							</ul>
						</div>

						<div class="project__info project__info--center">Climate Change is happening, and people need to believe it. Visualizing it in the simplest form is an excellent method of delivering the message. Using three.js (a library extension of WebGL) and basic JavaScript elements, we we’re tasked with visualizing some climate change, into an informational and educational way. I focused on the leading causes of climate change, and the potential threats they pose, as well as the possible ways to counter it.</div></div>

						<div class="project__launch">
							<div class="project__launch--button">> EXPERIENCE THE RISING TIDE</div>
						</div>

						<div class="project__image project__image--im1"></div>

					<div class="project__image project__image--im2"></div>
					
					<div class="project__image project__image--im3"></div>
					<div class="project__image project__image--im3"></div>
					
					<div class="project__image project__image--im4"></div>
					<div class="project__image project__image--im4"></div>

					

				</div>
		<?php require 'nextProj.php';?>
		<?php require 'footer.php';?>
		</div>
				
		
	</body>
</html> 