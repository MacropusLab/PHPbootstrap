# PHPbootstrap
PHP bootstrap starter pack
PHP Bootstrap – Starter pack: Save time on a new project!
PHP Bootstrap contains all the necessary tools to create a new php website.
Main Features:
Bootstrap 5
Fontawesome 5
GeoIP
Multilingual
particles.js
Animate.css
pace.js
Lottie Player
clipboard.js
Cookie Info
Connect to MySQL (PDO)
Custom Style
Meta Tags
Avatar
Favicon
Flags
.htaccess

What you need to know:

data/db.php – Database data

data/conect.php – Settings page

language/ – Languages

data/conect.php: $main_language = “english”; – Default language

How to change the language?

Put in the link ?Lang = english

macropuslab.com/?lang=english

New PHP Page:

<?php include("data/conect.php"); ?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<?php include("part/meta.php"); ?>

<!-- Stylesheet -->
<?php include("part/stylesheet.php"); ?>

<title>PHP Bootstrap!</title>
</head>
<body>
<div id ="particles-js">
</div>

<!-- Optional JavaScript -->
<?php include("part/JavaScript.php"); ?>

</body>
</html>

Adding new scripts:

part/JavaScript.php

Add new CSS:

part/stylesheet.php

Or edit:

css/style.css

