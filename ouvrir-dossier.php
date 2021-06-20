<?php
include("bdd.php");
$titre = 'Ouvrir un dossier';
include("navbar.php"); 
$result = mysqli_query($dossier,"SELECT * FROM Dossier");
?>

<!DOCTYPE html>
<html>
<head>

<style>
   .search {
      width: 320px;
      position: static;
      display: flex;
      border-radius: 20px;
      border: 2px solid black;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
      background-color: white;
      }
      .searchTerm {
      width:240px;
      margin: 3px 12px;
      border-right: none;
      padding: 5px;
      height: 20px;
      border: none;
      appearance: none;
      outline: none;
      background: none;
      font-size: 17px;
      color: black;
      }
      .searchButton {
      background-color: none;
      width: 40px;
      height: 36px;
      color : black;
      text-align: center;
      cursor: pointer;
      font-size: 18px;
      border:none;
      background: none;
      cursor: pointer;
      }

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
<br><br>

        <form action="search.php" method="post" class="search" >
        <input type="select" class="searchTerm" placeholder="Recherche" name="num">
        <button type="submit" class="searchButton"><i class="fa fa-search"></i>
        </button>
        </form>

<br><br>

<table>
   <tr>
       <th>  Numero</th>
       <th> Titre du dossier </th>
       <th> Service </th>
       <th> Date de creation </th>
       <th> Instance </th>
       <th> Description </th>
       <th> Document </th>
   </tr>
   <?php
      while($row = mysqli_fetch_array($result)){
        echo "<tr>
          <td>" . $row['numero'] . "</td>
          <td>" . $row['titreDossier'] . "</td>
          <td>" . $row['service'] . "</td>
          <td>" . $row['dateCreation'] . "</td>
          <td>" . $row['instance'] . "</td>
          <td>" . $row['etat'] . "</td>
          <td>" . $row['document'] ."<div class='container'> <div class='row'>
                                     <form action='ouvrir-dossier.php' method='post' enctype='multipart/form-data' >
                                     <input type='file' name='myfile'>
					                           <button type='submit' name='save'>up</button>
                                     </form>
                                     </div>
                                     </div></td></tr>";
      }
      mysqli_close($dossier);
    ?>
</table>
<br><br>
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


