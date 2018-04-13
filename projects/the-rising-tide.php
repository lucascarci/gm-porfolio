<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="luca, scarci, interaction design, design, sheridan college, student, designer, luca scarci,">
		<title>title</title>
		<link rel="stylesheet" href="../styles/core.css">
		<link rel="stylesheet" href="../styles/project_styles/trt.css">
		<link rel="stylesheet" href="../fonts/fonts.css">
	 </head>
	<body>
		<div class="main-container">

	<?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/nav.php";
       require($path);
    ?>
			<div class="switch next"><a href="#">Next Project</a></div>
		 
			<div class="switch previous"><a href="#">previous Project</a></div>

		

		<div class="project">
			<div class="project-info">
				<div class="project-return">
					<a class="page__header--return" href="../work.php">< RETURN TO WORK</a>
				</div>

				<div class="project-title">The Rising Tide</div>
				<div class="project-meta">2017 | Interactive + Web Design</div>

				<div class="project__break"></div>

				<div class="project-info__left">
					<li class="project-info__list-left project-info__list-left--first"><span class="light-list">Length: </span>12 Weeks</li>
					<li class="project-info__list-left"><span class="light-list">Tools: </span>Autodesk Maya</li>
					<li class="project-info__list-left"><span class="light-list">Languages: </span>JavaScript + Three.js</li>
					
				</div>

				<div class="project-info__center">The Level of Carbon Dioxide in the air is measured in Parts per Million. The Earth should rest around 350ppm(parts per million). In April of 2016, it was recorded at an all time high of 412ppm. Climate change is becoming and increasingly important matter which requires more attention. In order to deliver this message, I created an interactive experience for users, to see the current state of our planet, as well as the fate that is in store for them.</div>

				<div class="project-info__right">
					<li class="project-info__list-right b-button cb plb"><a>LAUNCH PROJECT</a></li>
					<li class="project-info__list-right b-button cb-l plb"><a>GITHUB REPOSITORY</a></li>
				</div>

				<div class="project-info__right">
					<a href="../../images/we/weAreAllHuman.pdf" target="_blank"><li class="project-info__list-right b-button cb plb">LAUNCH PROJECT</li></a>
					<a href="../../images/we/weAreAllHuman.pdf" target="_blank"><li class="project-info__list-right b-button cb-l plb">GITHUB REPOSITORY</li></a>
				</div>
			</div>
			<div class="project-hero rising__1"></div>
			<div class="caption">Rendered in Autodesk Maya</div>

			<div class="project-hero rising__4">

				<!-- <div class="project-hero__half h-1 rising__5"></div> -->
				<!-- <div class="project-hero__half h-2 rising__4"></div> -->
			</div>

			<div class="project__copy">
				<div class="bdy bdy__h">Process</div>
				<!-- <div class="bdy bdy__s">City Intersection</div> -->
				<div class="bdy bdy__c">Looking at the view</div>
			</div>
			<div class="project-hero rising__3"></div>
			<div class="caption">Wireframe View</div>


			<div class="project-hero rising__2"></div>


			<div class="project__copy">
				<div class="bdy bdy__h">Modeling</div>
				<!-- <div class="bdy bdy__s">Low Poly - Fast Loading</div> -->
				<div class="bdy bdy__c">Looking at the view</div>
			</div>


			

			<div class="project-hero video-link">
				<video src="../images/risingtide/01.mp4" width="100%" height="auto" type="video/mp4" autoplay="" muted="" loop=""></video>
			</div>
			<!-- <div class="project-hero rising__5"></div> -->
			<div class="project__copy">
				<div class="bdy bdy__h">Learning Outcomes<br></div>
				<div class="bdy bdy__c">Probably one of the most challenging aspects of this project, was creating a 3D Model of a reasonable size. File size was a great issue when it came to the project bandwidth. I aimed to keep the 3D model within 5MB in size for quick loadtimes when visiting. Especially when transferring the model, lights and materials. I had to limit myself to how many minor details I added. This meant removing windows, buildings street lamps, bushes cars and many trees.</div>
			<div class="project-hero-break"></div>

				
			</div>

		</div>




		<?php require '../nextProj.php';?>
		<?php require '../footer.php';?>
		</div>
				
		
	</body>
</html> 