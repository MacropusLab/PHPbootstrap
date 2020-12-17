<?php include("data/conect.php");  ?>
<!doctype html>
<!--
Developed by: Macropus Lab
Web: macropuslab.com
-->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php include("part/meta.php");  ?>

    <!-- Stylesheet -->
    <?php include("part/stylesheet.php");  ?>



    <title>PHP Bootstrap - Cookies</title>
  </head>
  <body>
    <div id ="particles-js">
    </div>

    <div class="container">
      <div class="text-center">
        <img src="img/logo.png" style="max-width:30%;" class="wow bounceInDown" data-wow-duration="2s" data-wow-delay="0.5s" alt="PHP Bootstrap">
      </div>

      <br>

      <div class="card shadow rounded text-white bg-dark wow bounceInDown" data-wow-duration="2s" data-wow-delay="1s">
        <img src="img/ogimage.jpg" class="card-img-top" alt="PHP Bootstrap">
        <div class="card-body text-center">
          <h5 class="card-title">Cookie Consent</h5>
          <p class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"><?= _Cookie1 ?></p>
          <p class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"><?= _Cookie2 ?></p>
        </div>
    </div>

    <br>
    <div class="text-center">
      <lottie-player
          src="img/lottie/rocket.json"  class="wow bounceInDown" data-wow-duration="2s" data-wow-delay="1.5s" background="transparent"  speed="1"  style="weight: 100%;"  loop  autoplay >
      </lottie-player>
    </div>


    </div>


    <!-- Optional JavaScript -->
    <?php include("part/JavaScript.php");  ?>

  </body>
</html>
