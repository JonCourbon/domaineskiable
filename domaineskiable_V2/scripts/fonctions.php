<?php

// fonction qui lit le fichier visites.txt pour obtenir le nb de visiteurs, ajoute 1, met à jour le fichier et retourne le nb de visites
function ajouterVisites(){
  $nomfichier='visites.txt';
  $contenu = file_get_contents($nomfichier);
  $nombrevisites=intval($contenu);
  $nombrevisites++;
  file_put_contents($nomfichier,$nombrevisites);
  
  return $nombrevisites;
} 
 ?>