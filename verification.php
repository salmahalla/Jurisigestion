<?php
require "config.php";
if ($_POST['username']==utilisateur){
    if ($_POST['password']==code){
        header('location:accueil.php');
    }else{
        header('location:Connexion.php?err=2');
    }
}else{
    header('location:Connexion.php?err=1');
}
?>