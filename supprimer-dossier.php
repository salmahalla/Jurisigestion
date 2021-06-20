<?php
include("bdd.php");
if(isset($_GET["numero"])){
  $numeros=$_GET["numero"];
  $sql="DELETE FROM dossier WHERE numero ='$numeros'";
  mysqli_query($dossier,$sql);
  echo '<script language="Javascript">
  document.location.replace("ouvrir-dossier.php");
  </script>';
}
?>