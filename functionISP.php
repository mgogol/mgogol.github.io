<?php
<?php


if (getenv('HTTP_CLIENT_IP')){
	  $ip=getenv('HTTP_CLIENT_IP');
	  }
	  else {
	  $ip=getenv('REMOTE_ADDR');
	}
$hostname = gethostbyaddr($ip);

$img = "";
$ISP ="votre op&eacute;rateur";

$nerim = ".nerim.net";
$sfr = ".sfr.net;.club-internet.fr;.completel.net";
$numericable = ".numericable.fr";
$orange = ".wanadoo.fr";
$free = ".proxad.net";
$bouygues = ".bbox.fr;.bouyguesbox.fr;.bouyguesbox.fr";


function get_ISP($hostname,$str)
{
$pos = strpos($hostname, $str);
if($pos != false )
{
return true;
}
return false;
}

if(get_ISP($hostname,$nerim))
{
$img = "http://www.nerim.fr/images/logo-nerim.png";
$ISP ="Nerim";
}
else if(get_ISP($hostname,$sfr))
{
$img = "http://static.s-sfr.fr/media/logo-3.jpg";
$ISP ="SFR T&eacute;l&eacute;com";
}
else if(get_ISP($hostname,$numericable))
{
$img = "https://webmail.numericable.fr/images/ncn/fr/include/web2/ncn/logo_ncn_sfr.png";
$ISP ="Numericable ";
}
else if (get_ISP($hostname,$orange))
{
$img = "http://c.orange.fr/logo-orange.png";
$ISP ="Orange";
}
else if (get_ISP($hostname,$free))
{
$img = "http://mobile.free.fr/images/logo.png";
$ISP ="Free";
}
else if (get_ISP($hostname,$bouygues))
{
$img = "http://puu.sh/st68R/74deafeedf.png";
$ISP ="Bouygues Telecom";
}


?>
