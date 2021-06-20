<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<link rel="icon" type="image/png" href="icon-page.png" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<title><?php echo $titre;  ?></title>

<style>
   *{ 
   margin: 0; 
   padding: 0; 
  }
  html{
    background-image: url("papier-murier-texture_53876-88671.jpg"); 
    height:100%;
  }
  main {
   background-image: url("arierre-plan.jpg");
   min-height:100%;
   margin:0 auto;	
  }
  
  /* Haut de page */
  header {
    width: 100%; 
    margin: 0;  
    background-color: rgba(158, 182, 222, 0.3); 
    color: black; 
    top:0;
    z-index:1;
  }
  ul {
    list-style-type: none; 
    margin: 0; 
    padding: 0; 
    overflow: hidden; 
  }
  li {
    float: left;
  }
  li a, .dropbtn {
    display: inline-block; 
    color: #000000; 
    text-align: center; 
    padding: 23px 70px; 
    text-decoration: none;
  }
  li a:hover, .dropdown:hover .dropbtn {
    background-color: #9eb6de;
  }
  li.dropdown {
    display: inline-block;
  }
  .dropdown-content {
    display: none; 
    position: absolute; 
    background-color: white; 
    min-width: 160px; 
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  }
  .dropdown-content a {
    color: black; 
    padding: 12px 16px; 
    text-decoration: none; 
    display: block; 
    text-align: left;
  }
  a{
    text-decoration: none;
  }
  img {
    display: block; 
    position:center;
  }
  .dropdown-content a:hover {
    background-color: #D0D3D4;
  }
  .dropdown:hover .dropdown-content {
    display: block;
  }
  /* Pied de page */
  footer {
    width:100%; 
    padding:15px 0 0 0; 
    text-align: center; 
    background-color:rgba(158, 182, 222, 0.3); 
    color: black; 
    bottom:0;
    display: block;
    z-index: -1;
  }
  .footer-ul {
    display:table; 
    margin:15px auto; 
    list-style-type:none; 
    background-color: rgba(158, 182, 222, 0.05);
  }
  .footer-li {
    padding-left: 2rem;
  }
  .button {
  color: white;
  padding: 10px 150px;
  text-decoration: none;
  cursor: pointer;
  border-radius: 24px;
  margin:40px 103px auto ;
  background-color: #b5b5b0;
  border: 2px solid #979791;
  font-size: 17px; 
}

.button:hover {  cursor:pointer;
                  background-color: #979791;}


</style>

<script type="text/javascript">
  function confirm_deconnexion() {return confirm('Voulez vous vraiment vous deconnectez ?');}
</script>
</head>

<body>
<header>
  <ul>
    <li> <img src="b.png"  width="210" height="75"></li> 
    <li><a href="accueil.php"> <img style="float: left; margin-right: 10px; margin-top: -10px;" src="accueil-icon.png"  width="30" height="40"> Accueil</a></li> 
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn"><img style="float: left; margin-right: 10px; margin-top: -10px;" src="service-icon.jpg"  width="30" height="40">Services</a> 
       <form class="dropdown-content" action="service.php" method="get" >
		     <a href="#">Division ressources humaines</a>
         <a href="#">Division comtable et financiere</a>
         <a href="#">Service juridique et assurance</a>
         <a href="#">Division qualité, securite et envirennement</a>
		     <a href="#">Service audit interne</a>
		     <a href="#">Service communication</a>
		     <a href="#">Division exploitation et travaux electricite</a>
		     <a href="#">Division exploitation et travaux eau et assainissement</a>
		     <a href="#">Division etudes</a>
		     <a href="#">Division commerciale</a>
		     <a href="#">Division moyens genereux et logistique</a>
		     <a href="#">Division systeme d'information</a>
	     </form></li>
    <li style="float:right"><a href="connexion.php" onclick="return confirm_deconnexion()"><img style="float: left; margin-right: 10px; margin-top: -10px;" src="deconnexion-icon.png"  width="40" height="40">Déconnexion</a></li>
  </ul>
</header>
</body>
</html>