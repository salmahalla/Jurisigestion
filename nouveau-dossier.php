<?php
include("bdd.php");
$titre = 'Nouveau dossier';
include("navbar.php"); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>

form { /* Cadre du formulaire */
   border:1px solid black;
   border-radius:10px;
   box-sizing:border-box;
   padding:49px;
   width:700px;
   position: static;
   margin-left: auto;
   margin-right: auto;
   box-shadow: 0 6px 8px rgba(0, 0, 0,   0.15);
 
} 

label{ /* Pour alignement des zones de saisie */
   width:150px;
   display:inline-block;
   margin-bottom:27px;
}

input {
   border:2px solid black;
   border-radius:2px; 
}
select{
   border:2px solid black;
   border-radius:3px;
   height:33px;
   width:445px;
}
input[type="submit"] {
   border: none;
   color: white;
   background-color:rgba(158, 182, 222, 0.8); 
   padding: 6px 40px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   margin: 1s0px 190px;
   cursor: pointer;
   border-radius: 24px; 
   font-size:16px; 
  border: 2px solid #9eb6de;
}

input[type="submit"]:hover {  cursor:pointer;
                  background-color: #9eb6de;}

#submit{ /* Bouton Ajouter */
   display:block;
   width:140px;
   height:70px;
   
}
.champ {
    height:27px;
    width:440px;
}
footer {
    padding:15px 0 1px 0; 
  }

</style>

<script type="text/javascript">
    function confirm_deconnexion() {
        return confirm('Voulez vous vraiment vous deconnectez ?');
    }
    function confirm_ajouter() {
        return confirm('Dossier ajoute avec succes.');
    }
</script>

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
<br><br><br>

<form id="signaletique" method="post">
   <label>Titre de dossier</label><input class="champ" type="text" id="titre" name="titreDossier" required /><br />
   <label>Numéro</label><input class="champ" type="text" id="numero" name="numero" required /><br />
   <label>Service </label>
        <select class="champ" type="text" id="service" name="service" required  >
		<option value="" selected disabled>Veuillez choisir le service</option>
		<option value="Division ressources humaines">Division ressources humaines</option>
		<option value="Division comtable et financiere">Division comtable et financiere</option>
		<option value="Service juridique et assurance">Service juridique et assurance</option>
		<option value="Division qualité, securite et envirennement">Division qualité, securite et envirennement</option>
		<option value="Service audit interne">Service audit interne</option>
		<option value="Service communication">Service communication</option>
		<option value="Division exploitation et travaux electricite">Division exploitation et travaux electricite</option>
		<option value="Division exploitation et travaux eau et assainissement">Division exploitation et travaux eau et assainissement</option>
		<option value="Division etudes">Division etudes</option>
		<option value="Division commerciale">Division commerciale</option>
		<option value="Division moyens genereux et logistique">Division moyens genereux et logistique</option>
		<option value="Division systeme d'information">Division systeme d'information</option>
		</select><br />
   <label>Date de création</label><input class="champ" type="date" id="datenais" name="dateCreation" required /><br />
   <label>Instance</label><input class="champ" type="text" id="instance" name="instance" required  /><br />
   <label>Description</label><input class="champ" type="text" id="description" name="etat" required /><br />

   <input type="submit"  value="Annuler" style="float: right; margin-right: 0px; margin-top: 10px;" />
   <input type="submit" name="insert_doss" value="Ajouter" onclick="return confirm_ajouter()" style="float: right; margin-right: 20px; margin-top: 10px;" />
    <br>
</form>
<br><br>
<?php
if(isset($_POST['insert_doss'])){
	$titreDossier=$_POST['titreDossier'];
	$numero=$_POST['numero'];
	$service=$_POST['service'];
	$dateCreation=$_POST['dateCreation'];
	$instance=$_POST['instance'];
	$etat=$_POST['etat'];
	$insert_doss= "insert into dossier(titreDossier,numero,service,dateCreation,instance,etat) values('$titreDossier','$numero','$service','$dateCreation','$instance','$etat')";
    $insert_dos = mysqli_query($dossier,$insert_doss);
}
?>
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