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

				<div class="project-info__center">This is the second iteration of a GO Transit project I previously worked on, and modified the project scope based on previous testing. The main changes made in this iteration, was the merging of several databases and systems — GO Transit, Presto UP Express & Metrolinx). It didn't make sense to have separate applications for each platform, so bridging their services under one roof makes for an efficient application for all platforms.</div>

				<div class="project-info__right">
<!-- 					<li class="project-info__list-right">> InVision Mockup</li>
 -->					<li class="project-info__list-right"></li>
				</div>
			</div>
			<div class="project-hero metro__1"></div>
				<div class="project__copy">
				<div class="bdy bdy__h">Iterations</div>
				<!-- <div class="bdy bdy__s">Insert Runaway</div> -->
				<div class="bdy bdy__c">Taking major elements from the previous project I had worked on, I focused on removing components that were no longer applicable, or just not feasible due to the large amount of good quality transit Applications on the market so far. Building an application that could service the mobile market and their demands from one portal allows for a straight forward interactions.</div>
			</div>
			
			<div class="project-hero metro__2"></div>
			<div class="project-hero metro__3"></div>

			<div class="project__copy">
				<div class="bdy bdy__h">Prior Testing</div>
				<!-- <div class="bdy bdy__s">Insert Runaway</div> -->
				<div class="bdy bdy__c">Initial testing that was done on the previous Project shed light on areas which were initially overlooked during the wireframe stages. The modular Home Screen would allow for users to customize their experience within the app, but it showed that it is very difficult to test the multiple variations users will have. This made it difficult to test due to the amount of unique users. However it does appeal to many users if they are provided with the option to do so. It also showed that users had difficulties leaving a trusted app they were already using for some time like <a href="https://itunes.apple.com/ca/app/transit-bus-train-times/id498151501?mt=8"><b>Transit</b></a>, <a href="https://itunes.apple.com/us/app/google-maps-gps-navigation/id585027354?mt=8"><b>Google Maps</b></a>, or <a href="https://itunes.apple.com/us/app/triplinx-2-0/id1226529747"><b>Triplinx</a><b>.</div>
			</div>

		<!-- 	<div class="body-h body-h__mHead">“Someone once told me not to bite off more than i could chew. I said id rather choke on greatness than nibble on mediocrity.”</div>
 -->
			<div class="project-hero metro__5"></div>

			<div class="project__copy">
				<div class="bdy bdy__h">Phase 1</div>
				<!-- <div class="bdy bdy__s">Creating the mockups for the final designs to be built</div> -->
				<div class="bdy bdy__c">Climate Change is happening, and people need to believe it. Visualizing it in the simplest form is an excellent method of delivering the message. Using three.js (a library extension of WebGL) and basic JavaScript elements, we we’re tasked with visualizing some climate change, into an informational and educational way. I focused on the leading causes of climate change, and the potential threats they pose, as well as the possible ways to counter it.</div>
			</div>

			<div class="project-hero-break"></div>
			<!-- <div class="project-hero"></div> -->
		</div>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-92989785-1', 'auto');
		  ga('send', 'pageview');

		</script>


		<?php require '../nextProj.php';?>
		<?php require '../footer.php';?>
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