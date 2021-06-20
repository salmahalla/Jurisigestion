<?php
include("bdd.php");
$titre = 'Accueil';
include("navbar.php"); 
//session_start();
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<link rel="icon" type="image/png" href="logo-icon.png" />


<style>
footer {
    bottom:0;
    position:fixed;
  }

</style>

</head>
<body>
<button  class="button" onclick="window.location.href ='nouveau-dossier.php';" >
    <img style="float: left; margin-right: 10px; margin-top: -6px;" src="ajoute-icon.png"  width="30" height="30">
    Nouveau dossier
    </button>
<button class="button" onclick="window.location.href ='ouvrir-dossier.php';" >
    <img style="float: left; margin-right: 10px; margin-top: -6px;" src="service1-icon.png"  width="30" height="30">
    Ouvrir un dossier
    </button>   
</body>
<footer>
  Conçu et réalisé par Salma HALLA | Copyright @ 2020 RADEEJ. Tous les droits sont réservés. 
  <ul class= "footer-ul">
    <li><i class="fa fa-location-arrow"></i> 32 Rue 352, El Jadida </li>
    <li class= "footer-li"><i class="fa fa-phone"></i>  +212-687087660  </li>
    <li class= "footer-li"><i class="fa fa fa-envelope"></i> salma.halla.2000@gmail.com </li>
  </ul>
</footer>
</html>