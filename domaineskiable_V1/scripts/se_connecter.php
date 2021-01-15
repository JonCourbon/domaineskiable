<?php
session_start();

if(sha1($_POST["password"])=='d033e22ae348aeb5660fc2140aec35850c4da997'){
    $_SESSION["connecte"]="ADMIN";
    header("Location: ../index.php");
    exit();
}
else if(sha1($_POST["password"])=='0285676daf56797679e6e743a0b5263d7400aae1'){
    $_SESSION["connecte"]="MEMBRE";
    header("Location: ../index.php");
    exit();
}
else{
  header("Location: ../connection.php?erreur=inconnu");
  exit();
}
?>