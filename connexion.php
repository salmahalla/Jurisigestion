<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<link rel="icon" type="image/png" href="icon-page.png" />
<title>Connexion</title>

<style>
  body {
   background-image: url("papier-murier-texture_53876-88671.jpg");
}
   *{ 
        margin: 0; 
        padding: 0; }
    #container{
        color: white; 
        width:650px; 
        margin:10% auto; }
    form {
        background: #9eb6de;
        position: top;
        margin: auto;
        width: 78.5%;
        padding: 70px;}
    div{
        position:absolute;
        left:300px;
        right:300px;
        top:30px;}
    #container h1{
        position:absolute; 
        width:100%; 
        padding:15px 0 15px 0; 
        text-align: center; 
        background-color: #004280; 
        top:0; 
        margin:auto; 
        border-bottom-style: solid ;}
    h1{
        font-size: 60px; 
        font-family: Arial,  sans-serif; 
        font-weight: bolder;
    }    
    a { 
        font-family: Arial,  sans-serif; 
        font-weight: bolder; }
    /* Full-width inputs */
    input[type=text], input[type=password] {
        width: 60%;
        padding: 12px 20px;
        margin: 10px 20px;
        display: inline-block;
        border: 3px solid #004280;
        box-sizing: border-box;}
    /* Set a style for all buttons */
    input[type=submit] {
        background-color: #004280;
        color: white;
        padding: 10px 20px;
        margin: 8px 7px;
        border: none;
        cursor: pointer;
        width: 30%;
        height: 15%;
        position:absolute;
        right:90px;}  
    input[type=submit]:hover {
        background-color: white;
        color:#004280;
        border: 3px solid #004280;}
    img {
        display: block;
        margin-top: 40px;
        margin-left: auto;
        margin-right: auto;}
    label{
        width: 30%;
        display:inline-block;
        margin-bottom:20px;
        text-align: right;
        color : #004280;}
</style>

</head>

<body> 
    <img src="8.png"  width="300" height="100">
    <div id="container" >
        <h1>Connexion</h1>
        <br><br><br>
            <form action="verification.php" method="POST">
               <label for=""><a>E-Mail</a></label>
                <input  type="text" placeholder="utilisateur@gmail.com" name="username" required /><br />
                <label><a>Mot de passe</a></label> 
                <input type="password" placeholder="••••••••••••••••••" name="password" required /><br />
                <input  type="submit" id='submit' value='Connexion' >
                <br>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>       
    </div>   
</body>

</html>