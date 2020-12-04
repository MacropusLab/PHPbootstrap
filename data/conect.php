<?php
include("db.php");


try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDBx", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    //Public IP
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $ip = $ipaddress;
    $user_ip = getenv('REMOTE_ADDR');
    //DESKTOP.Home
    $Domain = $user_ip;
    //$Domain = gethostbyaddr($_SERVER['REMOTE_ADDR']) ? gethostbyaddr($_SERVER['REMOTE_ADDR']) : "unknown";
    //Mozilla/5.0
    $useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "unknown";
    //Actualni link
    $actuallink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $actuallinkuri = $_SERVER["REQUEST_URI"];

    $mywebaddress = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";


    $domainadmin = parse_url($mywebaddress, PHP_URL_HOST); //hostname

    $imagecount = count(glob("img/avatar/*.png"));

    $main_language = "english";
    
    // Set Language variable
    if(isset($_GET['lang']) && !empty($_GET['lang'])){
     $_SESSION['lang'] = $_GET['lang'];

     if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
      echo "<script type='text/javascript'> location.reload(); </script>";
     }
    }

    // Include Language file
    if(isset($_SESSION['lang'])){
     include "language/".$_SESSION['lang'].".php";
    }else{
     include "language/$main_language.php";
    }

    $lanbdselect = isset($_SESSION['lang']) ? $_SESSION['lang'] : "$main_language";

    include("geo/geoip.inc");

        // Uncomment if querying against GeoIP/Lite City.
        // include("../src/geoipcity.inc");


        $gi = geoip_open("geo/GeoIP.dat", GEOIP_MEMORY_CACHE);
        $giv6 = geoip_open("geo/GeoIPv6.dat", GEOIP_MEMORY_CACHE);

        function isValidIPv6($ip){
            if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6))
                return true;
            return false;
        }

        //AgentInfo
      $u_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "unknown";
      $u_agentos = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "unknown";
      $u_agentosinfo = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "unknown";
      include("data/agent.php");
      include("data/contryselect.php");

 ?>
