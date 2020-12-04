<?php
if( preg_match('/MSIE (\d+\.\d+);/', $u_agent) ) {
   $u_agent = "Internet Explorer";
} else if (preg_match('/Trident\/\d+/', $u_agent) ) {
   $u_agent = "Internet Explorer";
} else if (preg_match('/Edge\/\d+/', $u_agent) ) {
   $u_agent = "Edge";
}  else if ( preg_match('/Firefox[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Mozilla Firefox";
} else if ( preg_match('/OPR[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Opera";
} else if ( preg_match('/Opera[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Opera";
} else if ( preg_match('/Maxthon[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Maxthon";
} else if ( preg_match('/Vivaldi[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Vivaldi";
} else if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Google Chrome";
 }else if (preg_match('/Safari[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Apple Safari";
} else if (preg_match('/bot/', $u_agent) ) {
   $u_agent = "Bot";
} else if (preg_match('/bot[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Bot";
} else if (preg_match('/bingbot[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "bingbot";
} else if (preg_match('/Googlebot[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Googlebot";
} else if (preg_match('/Mediapartners-Google/', $u_agent) ) {
   $u_agent = "Googlebot";
} else if (preg_match('/[\/\s](\d+\.\d+)/', $u_agent) ) {
   $u_agent = "Unknown";
} else if (preg_match('//', $u_agent) ) {
   $u_agent = "Unknown";
}

if( preg_match('/linux|Android/i', $u_agentos) ) {
   $u_agentos = "Android";
} else if (preg_match('/macintosh|mac os x/i', $u_agentos) ) {
   $u_agentos = "Mac";
} else if (preg_match('/mac_powerpc/i', $u_agentos) ) {
   $u_agentos = "Mac";
}else if (preg_match('/windows|win32/i', $u_agentos) ) {
   $u_agentos = "Windows";
} else if ( preg_match('/linux/i', $u_agentos) ) {
   $u_agentos = "Linux";
 } else if ( preg_match('/slackware/i', $u_agentos) ) {
     $u_agentos = "Linux";
 }else if ( preg_match('/kali/i', $u_agentos) ) {
      $u_agentos = "Linux";
 }else if ( preg_match('/fedora/i', $u_agentos) ) {
       $u_agentos = "Linux";
 }else if ( preg_match('/mint/i', $u_agentos) ) {
        $u_agentos = "Linux";
 }else if ( preg_match('/Arch/i', $u_agentos) ) {
        $u_agentos = "Linux";
 }else if ( preg_match('/ubuntu/i', $u_agentos) ) {
    $u_agentos = "Ubuntu";
} else if ( preg_match('/iPhone/i', $u_agentos) ) {
   $u_agentos = "iPhone";
} else if (preg_match('/iPad/i', $u_agentos) ) {
   $u_agentos = "iPad";
}else if (preg_match('/ipod/i', $u_agentos) ) {
   $u_agentos = "iPod";
}
else if (preg_match('/webos/i', $u_agentos) ) {
   $u_agentos = "Mobile";
}
else if (preg_match('/blackberry/i', $u_agentos) ) {
   $u_agentos = "BlackBerry";
}
else if (preg_match('/Windows Phone/i', $u_agentos) ) {
   $u_agentos = "Windows Phone";
}
else if (preg_match('/windows/i', $u_agentos) ) {
   $u_agentos = "Windows";
}
else if (preg_match('/CrOS/i', $u_agentos) ) {
   $u_agentos = "Chrome OS";
}
else if (preg_match('//i', $u_agentos) ) {
   $u_agentos = "Unknown";
}


if( preg_match('/windows nt 10/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows 10";
} else if (preg_match('/windows nt 6.3/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows 8.1";
} else if (preg_match('/windows nt 6.2/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows 8";
} else if ( preg_match('/windows nt 6.1/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows 7";
 } else if ( preg_match('/windows nt 6.0/i', $u_agentosinfo) ) {
    $u_agentosinfo = "Windows Vista";
} else if ( preg_match('/windows nt 5.2/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows Server";
} else if (preg_match('/windows nt 5.1/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows XP";
}else if (preg_match('/windows xp/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows XP";
}
else if (preg_match('/windows nt 5.0/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows 2000";
}
else if (preg_match('/windows me/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows ME";
}
else if (preg_match('/win98/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows 98";
}
else if (preg_match('/win95/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows 95";
}
else if (preg_match('/win16/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows 3.11";
}
else if (preg_match('/Windows Phone/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Windows Phone";
}
else if (preg_match('/macintosh|mac os x/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Mac OS X";
}
else if (preg_match('/mac_powerpc/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Mac OS 9";
}
else if (preg_match('/linux|Android/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Android";
}
else if (preg_match('/linux/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Linux";
}
else if (preg_match('/kali/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Linux Kali";
}
else if (preg_match('/fedora/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Linux Fedora";
}
else if (preg_match('/mint/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Linux Mint";
}
else if (preg_match('/slackware/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Linux Slackware";
}
else if (preg_match('/Arch/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Linux Arch";
}
else if (preg_match('/ubuntu/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Ubuntu";
}
else if (preg_match('/iphone/i', $u_agentosinfo) ) {
   $u_agentosinfo = "iPhone";
}
else if (preg_match('/ipod/i', $u_agentosinfo) ) {
   $u_agentosinfo = "iPod";
}
else if (preg_match('/ipad/i', $u_agentosinfo) ) {
   $u_agentosinfo = "iPad";
}

else if (preg_match('/blackberry/i', $u_agentosinfo) ) {
   $u_agentosinfo = "BlackBerry";
}
else if (preg_match('/webos/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Mobile";
}
else if (preg_match('/CrOS/i', $u_agentosinfo) ) {
   $u_agentosinfo = "Chrome OS";
}
else if (preg_match('//i', $u_agentosinfo) ) {
   $u_agentosinfo = "Unknown";
}
 ?>
