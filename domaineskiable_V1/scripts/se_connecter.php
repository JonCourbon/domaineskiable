<?php
session_start();
$_SESSION["connecte"]="ADMIN";

header("Location: ../index.php");
exit();
 ?>