<?php
include("bdd.php");
$titre= 'Modifier dossier';
include("navbar.php");
if(isset($_GET["numero"])){
  $numerom=$_GET["numero"];
  $sql="select *from dossier where numero ='$numerom'";
  $dossier = mysqli_connect("localhost","root","","gestion_dossier");
  $result=mysqli_query($dossier,$sql);
  
   $row = mysqli_fetch_assoc($result);
        $numero=$row["numero"];
		$titreDossier=$row["titreDossier"];
		$service=$row["service"];
		$dateCreation=$row["dateCreation"];
		$instance=$row["instance"];
		$etat=$row["etat"];
}
   if(isset($_POST["modifier"])){
   $numero=$_POST["numero"];
   $titreDossier=$_POST["titreDossier"];
   $service=$_POST["service"];
   $dateCreation=$_POST["dateCreation"];
   $instance=$_POST["instance"];
   $etat=$_POST["etat"]; 
   $sql="UPDATE dossier SET titreDossier='$titreDossier',service='$service',dateCreation='$dateCreation',instance='$instance',etat='$etat' WHERE numero=$numero";
        mysqli_query($dossier,$sql);
        echo '<script language="Javascript">
                document.location.replace("ouvrir-dossier.php");
                </script>';}
	
   if(isset($_POST["annuler"])){
    echo '<script language="Javascript">
    document.location.replace("ouvrir-dossier.php");
    </script>';
  }
?>

<!DOCTYPE html>
<html>
<head>
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
    bottom: 0;
    position:fixed; 
  }

</style>
<script type="text/javascript">
function confirm_deconnexion() {
  return confirm('Voulez vous vraiment vous deconnectez ?');
}
function confirm_modifier() {
  return confirm('Dossier modifie avec succes.');
}
</script>

</head>
<body>
<br><br>
<form action="modifier-dossier.php" method="post">
  <label>Titre de dossier</label><input name="titreDossier" class="champ" type="text"  value="<?php echo $titreDossier ?>"  /><br />
   <label>Numéro</label><input name="numero" class="champ" type="text"  value="<?php echo $numero ?>"  /><br />
   <label>Service </label>
    <select name="service"  type="text"  selected value="<?php echo $service ?>" >
		<option value="">Veuillez choisir le service</option>
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
   <label>Date de création</label><input name="dateCreation" class="champ" type="date"  value="<?php echo $dateCreation ?>"  /><br />
   <label>Instance</label><input name="instance" class="champ" type="text" value="<?php echo $instance ?>"   /><br />
   <label>Etat</label><input name="etat" class="champ" type="text"  value="<?php echo $etat ?>"/><br />

   <input type="submit" name="annuler" value="Annuler" style="float: right; margin-right: 0px; margin-top: 10px;" />
   <input type="submit" name="modifier"  value="Modifier" onclick="return confirm_modifier()" style="float: right; margin-right: 20px; margin-top: 10px;" />
</form>
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