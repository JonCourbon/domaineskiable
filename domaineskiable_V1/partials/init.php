<?php 
session_start();
$classcouleurfond=""; // valeur par défaut
if(isset($_SESSION["classcouleurfond"])){
  $classcouleurfond=$_SESSION["classcouleurfond"];
}
 ?>