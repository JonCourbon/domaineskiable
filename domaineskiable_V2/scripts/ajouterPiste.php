<?php 
session_start();
if($_SESSION["connecte"]=="ADMIN"){ // on s'assure qu'on est bien l'admin
  include("../configuration/config.php");
  $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
  
  $nom=$bdd->quote($_POST["nom"]);
  $type=$_POST["type"];
  $couleur=$_POST["couleur"];
  
  $requete='INSERT INTO piste(nom,type,couleur) VALUES('.$nom.',"'.$type.'","'.$couleur.'")';
  $nblignes=$bdd->exec($requete);
}

header("Location: ../pistes.php");
exit();

?>