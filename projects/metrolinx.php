<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="luca, scarci, interaction design, design, sheridan college, student, designer, luca scarci,">
		<title>title</title>
		<link rel="stylesheet" href="../styles/core.css">
		<link rel="stylesheet" href="../styles/project_styles/metro.css">
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

				<div class="project-title">Metrolinx</div>
				<div class="project-meta">2018 | Product Design + Research</div>

				<div class="project__break"></div>

				<div class="project-info__left">
					<li class="project-info__list-left project-info__list-left--first"><span class="light-list">Length:</span> 12 Weeks</li>
					<li class="project-info__list-left"><span class="light-list">Tools:</span> Sketch, Adobe Illustrator</li>
					<li class="project-info__list-left"><span class="light-list">Other: </span>School Project</li>
				</div>

				<div class="project-info__center">Using three.js (a library extension of WebGL) and basic JavaScript elements, we we’re tasked with visualizing some climate change, into an informational and educational way. I focused on the leading causes of climate change, and the potential threats they pose, as well as the possible ways to counter it.</div>

				<div class="project-info__right">
					<li class="project-info__list-right">> InVision Mockup</li>
					<li class="project-info__list-right"></li>
				</div>
			</div>
			<div class="project-hero metro__1"></div>
				<div class="project__copy">
				<div class="bdy bdy__h">Phase 1</div>
				<div class="bdy bdy__s">Insert Runaway</div>
				<div class="bdy bdy__c">Climate Change is happening, and people need to believe it. Visualizing it in the simplest form is an excellent method of delivering the message. Using three.js (a library extension of WebGL) and basic JavaScript elements, we we’re tasked with visualizing some climate change, into an informational and educational way. I focused on the leading causes of climate change, and the potential threats they pose, as well as the possible ways to counter it.</div>
			</div>
			
			<div class="project-hero metro__2"></div>
			<div class="project-hero metro__3"></div>

			<div class="project__copy">
				<div class="bdy bdy__h">Phase 1</div>
				<div class="bdy bdy__s">Insert Runaway</div>
				<div class="bdy bdy__c">Climate Change is happening, and people need to believe it. Visualizing it in the simplest form is an excellent method of delivering the message. Using three.js (a library extension of WebGL) and basic JavaScript elements, we we’re tasked with visualizing some climate change, into an informational and educational way. I focused on the leading causes of climate change, and the potential threats they pose, as well as the possible ways to counter it.</div>
			</div>

		<!-- 	<div class="body-h body-h__mHead">“Someone once told me not to bite off more than i could chew. I said id rather choke on greatness than nibble on mediocrity.”</div>
 -->
			<div class="project-hero metro__4"></div>
			<div class="project-hero metro__5"></div>

			<div class="project__copy">
				<div class="bdy bdy__h">Phase 1</div>
				<div class="bdy bdy__s">Creating the mockups for the final designs to be built</div>
				<div class="bdy bdy__c">Climate Change is happening, and people need to believe it. Visualizing it in the simplest form is an excellent method of delivering the message. Using three.js (a library extension of WebGL) and basic JavaScript elements, we we’re tasked with visualizing some climate change, into an informational and educational way. I focused on the leading causes of climate change, and the potential threats they pose, as well as the possible ways to counter it.</div>
			</div>

			<div class="project-hero-break"></div>
			<!-- <div class="project-hero"></div> -->
		</div>




		<?php require '../nextProj.php';?>
		<?php require '../footer.php';?>
		</div>
				
		
	</body>
</html> 