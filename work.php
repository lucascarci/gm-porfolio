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

	<?php 
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/nav.php";
	   include_once($path);
	?>

	<div class="page__header page__header--mobile">

		<div class="page__header page__header--title">Work</div>
	  
	</div>

	<div class="work">

	  <a href="projects/metrolinx.php">
		<div class="preview__container prj2">
		  <div class="preview__info--top">
			<p class="preview__info--topleft">Metrolinx</p>
			<p class="preview__info--topRight">2018</p>
		  </div>

		  <div class="preview__info--bottom">
			<p class="preview__info--bottomleft">Product Design</p>
			<p class="preview__info--bottomRight">3 WEEKS</p>
		  </div>
		</div>
	  </a>
	  
	   <a href="projects/we-are-one.php">
		<div class="preview__container prj3">
		  <div class="preview__info--top">
			<p class="preview__info--topleft">We Are One</p>
			<p class="preview__info--topRight">2017</p>
		  </div>

		  <div class="preview__info--bottom">
			<p class="preview__info--bottomleft">Human Centered Design + Branding</p>
			<p class="preview__info--bottomRight">12 WEEKS</p>
		  </div>
		</div>
	  </a>

	  <a href="projects/the-rising-tide.php">
		<div class="preview__container prj1">
		  <div class="preview__info--top">
			<p class="preview__info--topleft">THE RISING TIDE</p>
			<p class="preview__info--topRight">2016</p>
		  </div>

		  <div class="preview__info--bottom">
			<p class="preview__info--bottomleft">FRONT END DEV + INTERACTIVE</p>
			<p class="preview__info--bottomRight">10 WEEKS</p>
		  </div>
		</div>
	  </a> 

	<a href="projects/transmedia.php">
		<div class="preview__container prj5">
		  <div class="preview__info--top">
			<p class="preview__info--topleft">Project 151</p>
			<p class="preview__info--topRight">2018</p>
		  </div>

		  <div class="preview__info--bottom">
			<p class="preview__info--bottomleft">Transmedia Game</p>
			<p class="preview__info--bottomRight">In Progress</p>
		  </div>
		</div>
	  </a>

	  <a href="projects/consume-culture.php">
		<div class="preview__container prj4">
		  <div class="preview__info--top">
			<p class="preview__info--topleft">Consume Culture</p>
			<p class="preview__info--topRight">2017</p>
		  </div>

		  <div class="preview__info--bottom">
			<p class="preview__info--bottomleft">Social Campaign</p>
			<p class="preview__info--bottomRight">6 WEEKS</p>
		  </div>
		</div>
	  </a>



	  <a href="sandbox.php">
		<div class="preview__container--blog blog">
		  <div class="preview__blg preview__blg--left">SHIT I'VE MADE FOR FUN</div>
		  <div class="preview__blg preview__blg--right">2016-Present</div>

		</div>
	  </a>


	  <?php 
		 $path = $_SERVER['DOCUMENT_ROOT'];
		 $path .= "/footer.php";
		 include_once($path);
	  ?>
	</div>



  </body>
 		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-92989785-1', 'auto');
		  ga('send', 'pageview');

		</script>
</html> 