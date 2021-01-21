<?php 
session_start();
if($_SESSION["connecte"]=="ADMIN"){ // on s'assure qu'on est bien l'admin
  include("../configuration/config.php");
  $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

  $id=$_GET["id"];

  $requete='DELETE FROM piste WHERE id='.$id;
  $nblignes=$bdd->exec($requete);
}
header("Location: ../pistes.php");
exit();


 ?>