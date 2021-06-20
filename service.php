<?php
include("bdd.php");
$titre = 'Recherche';
include("navbar.php"); 
?>
<!DOCTYPE html>
<html>

<head>
<style>

.border {
      border : 2px  solid black;
      width:20%;
      margin : auto ;
      }

  #submit{ /* Bouton Ajouter */
      display:block;
      width:140px;
      height:70px;
      }

      table{
      border-collapse: collapse; /* Les bordures du tableau seront collées (plus joli) */
      margin: 5px; 
      width: 99%;
}
td, th /* Mettre une bordure sur les td ET les th */
{  
    border: 1px solid black;
}

td{
  text-align : center;
}
th
{
    background-color:#9eb6de;
}

footer {
    padding:15px 0 1px 0;
    bottom: 0;
    position:fixed; 
  }


</style>
<script type="text/javascript">
function confirm_deconnexion() {
  return confirm('Voulez vous vraiment vous deconnectez ?');
}
function confirm_supprimer() {
  return confirm('Voulez vous vraiment supprimer ce dossier ?');
}
</script>
</style>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   
</head>

<body>

<body>
<button  class="button" onclick="window.location.href ='nouveau-dossier.php';" >
    <img style="float: left; margin-right: 10px; margin-top: -6px;" src="ajoute-icon.png"  width="30" height="30">
    Nouveau dossier
    </button>
<button class="button" onclick="window.location.href ='ouvrir-dossier.php';" >
    <img style="float: left; margin-right: 10px; margin-top: -6px;" src="service1-icon.png"  width="30" height="30">
    Ouvrir un dossier
    </button>   
<br><br><br>
    <?php

$code=$_POST["num"];

?>
 
<h3></h3>
<table >
 <tr>
       <th>Numero</th>
       <th>Titre du dossier</th>
       <th>Service</th>
       <th> Date de creation </th>
       <th> Instance </th>
       <th> Description </th>
       <th> Document </th>
	   <th> Modification </th>
	   <th> Suppression </th>
 </tr>
	
	<?php
	include("bdd.php");
    $req="select * from dossier WHERE service='.$_GET['service'] ";
    $res=$dossier->Query($req);
    if($res->num_rows>0){
	  while($row=$res->fetch_Assoc()){
		$numero=$row['numero'];
		$titreDossier=$row['titreDossier'];
		$Service=$row['service'];
		$DateCreation=$row['dateCreation'];
		$instance=$row['instance'];
		$etat=$row['etat'];
		$Document=$row['document'];
		 
echo"
 <tr>
 <td>$numero</td>
 <td>$titreDossier</td>
 <td>$Service</td>
 <td>$DateCreation</td>
 <td>$instance</td>
 <td>$etat</td>
 <td> <div class='container'>
      <div class='row'>
        <form action='ouvrir-dossier.php' method='post' enctype='multipart/form-data' >
          <input type='file' name='myfile'><button type='submit' name='save'>up</button>
        </form>
      </div>
    </div></td>
  .<td><a href='modifier-dossier.php?numero=".$row["numero"]."'  >modifier</a></td>
  .<td><a  onclick='return confirm_supprimer()'  href='supprimer-dossier.php?numero=".$row["numero"]."'>supprimer</a></td>
 </tr>
 ";
 }
 mysqli_close($dossier);
 }
?> 

 </table>
 <footer>
  Conçu et réalisé par Salma HALLA | Copyright @ 2020 RADEEJ. Tous les droits sont réservés. 
  <ul class= "footer-ul">
    <li><i class="fa fa-location-arrow"></i> 32 Rue 352, El Jadida </li>
    <li class= "footer-li"><i class="fa fa-phone"></i>  +212-687087660  </li>
    <li class= "footer-li"><i class="fa fa fa-envelope"></i> salma.halla.2000@gmail.com </a></li>
  </ul>
</footer>
</body>
</html>