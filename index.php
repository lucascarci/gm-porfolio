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
        require($path);
    ?>

    
      
      <div class="intro">
        <div class="intro__body">I'm Luca, a student at Sheridan College studying Interaction Design.</div>
        <div class="breaker"></div>
        <div class="worklist">
          <a class="intro__readmore" href="contact.php">About</a>
          <div class="breakerSpacer">/</div>
          <a class="intro__readmore" href="contact.php">Portfolio</a>
        </div>
        
      </div>
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