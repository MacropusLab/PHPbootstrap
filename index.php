<?php include("data/conect.php");  ?>
<!doctype html>
<!--
Developed by: Macropus Lab
Web: macropuslab.com
-->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PHP bootstrap">
    <meta name="keywords" content="PHP,CSS,Bootstrap,JavaScript">

    <meta name="og:title" content="The Rock"/>
    <meta name="og:type" content="movie"/>
    <meta name="og:url" content="<?php echo "$actuallink"; ?>"/>
    <meta name="og:image" content="img/ogimage.jpg"/>
    <meta name="og:site_name" content="PHP bootstrap"/>
    <meta name="og:description" content="PHP bootstrap..."/>

    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#c20808">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#c20808">

    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Pace CSS -->
    <link rel="stylesheet" href="css/pace.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">

    <title>PHP bootstrap!</title>
  </head>
  <body>

    <div class="container text-center">
      <i class="fab fa-php fa-10x wow zoomIn" data-wow-duration="2s" data-wow-delay="1s" style="color:Tomato"></i>

      <hr>

      <div class="alert alert-info wow headShake" data-wow-duration="2s" data-wow-delay="1s" role="alert">
        PHP bootstrap
        <button class="btn btn-light wow flash" type="button" data-clipboard-text="<?php echo $actuallink; ?>" data-toggle="tooltip" data-placement="bottom" title="Copy"><i class="far fa-copy"></i></button>
      </div>


      <lottie-player
          src="img/lottie/rocket.json"  class="wow bounceInDown" data-wow-duration="2s" data-wow-delay="1s" background="transparent"  speed="1"  style="weight: 100%;"  loop  autoplay >
      </lottie-player>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/lottie-player.js"></script>
    <script src="js/clipboard.min.js"></script>

    <script type="text/javascript" id="cookieinfo"
    		src="js/cookieinfo.min.js"
    	data-bg="#1c1c1c"
    	data-fg="#FFFFFF"
    	data-link="#014890"
    	data-cookie="CookieInfoScript"
    	data-text-align="left"
           data-close-text="I agree!">
    </script>

    <script  type="text/javascript">
var clipboard = new ClipboardJS('.btn');

clipboard.on('success', function(e) {
    console.log(e);
});

clipboard.on('error', function(e) {
    console.log(e);
});
</script>

  </body>
</html>
