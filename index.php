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
          <a class="intro__readmore" href="contact.php">Read More</a>
          <div class="breakerSpacer">/</div>
          <a class="intro__readmore" href="contact.php">Portfolio</a>
        </div>
        
      </div>
    </div>

  </body>
</html> 