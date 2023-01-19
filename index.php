<?php include("data/conect.php");  ?>
<?php  ?>
<!doctype html>
<!--
Developed by: Macropus Lab
Web: macropuslab.com
-->
<html lang="en" data-bs-theme="<?php echo "$styleselect"; ?>">
  <head>
    <!-- Required meta tags -->
    <?php include("part/meta.php");  ?>

    <!-- Stylesheet -->
    <?php include("part/stylesheet.php");  ?>



    <title>PHP Bootstrap!</title>
  </head>
  <body>

    <div class="container">
      <div class="text-center">
        <img src="img/logo.png" style="max-width:30%;" class="wow bounceInDown" data-wow-duration="2s" data-wow-delay="0.5s" alt="PHP Bootstrap">
      </div>

      <br>

      <div class="card rounded wow bounceInDown" data-wow-duration="2s" data-wow-delay="1s" data-bs-theme="<?php echo "$styleselect"; ?>">
        <div class="card-body text-center">
          <h5 class="card-title">PHP Bootstrap <i class="fa-brands fa-php"></i></h5>
          <p class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"><?= _Hello ?></p>
          <p class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"><?php echo "$ipaddress"; ?>
          <br>
          <img width="100px" src="img/avatar/avatar_<?php echo(rand(1,$imagecount)); ?>.png" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"></p>
          <p><?= _From ?>: <?php echo "$country"; ?> <img src='img/flags/24/<?php echo "$countryx"; ?>.png'/> <?= _onthe ?> <?php echo "$u_agentos"; ?> <img src='img/icons/<?php echo "$u_agentos"; ?>.png'/> , <?php echo " $u_agent"; ?> <img src='img/icons/<?php echo "$u_agent"; ?>.png'/></p>
          <hr>
          <p class="card-text"><?= _Features ?>
          <span class="badge bg-primary">Bootstrap v 5.3</span> <span class="badge bg-primary">Fontawesome 6</span> <span class="badge bg-primary">Dark/Light mode</span> <span class="badge bg-primary">GeoIP</span> <span class="badge bg-primary">Multilingual</span>
            <span class="badge bg-primary">Animate.css</span> <span class="badge bg-primary">pace.js</span> <span class="badge bg-primary">Lottie Player</span>
           <span class="badge bg-primary">clipboard.js</span> <span class="badge bg-primary">Cookie Info</span> <span class="badge bg-primary">Connect to MySQL (PDO)</span> <span class="badge bg-primary">Custom Style</span>
           <span class="badge bg-success">Meta Tags</span> <span class="badge bg-success">Avatar</span> <span class="badge bg-success">Favicon</span> <span class="badge bg-success">Flags</span> <span class="badge bg-success">.htaccess</span>
         </p>
          <button class="btn btn-danger btn-lg wow flash" type="button" data-clipboard-text="<?php echo $actuallink; ?>" data-toggle="tooltip" data-placement="bottom" title="Copy"><i class="far fa-copy"></i></button>
        </div>
        <div class="card-footer">
          <div class="d-grid gap-2 col-6 mx-auto">
          <a class="btn btn-danger" href="https://github.com/MacropusLab/PHPbootstrap" target="_blank" type="button"><?= _Download ?> <i class="fas fa-cloud-download-alt"></i></a>
          </div>
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
    <?php include("part/footer.php");  ?>

    <!-- Optional JavaScript -->
    <?php include("part/JavaScript.php");  ?>

  </body>
</html>
