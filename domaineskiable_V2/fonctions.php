<?php 

/*
Schéma de la table piste:
piste(id,nom,type, couleur)
*/

// fonction permettant de lister toutes les pistes d'un certain type
// Retourne un tableau indexé de tableaux associatifs
function listerPistes($type){
  include("configuration/config.php");
  $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
  $requete='SELECT * FROM piste ORDER by nom';
  $resultats=$bdd->query($requete);
  $tableau=$resultats->fetchAll(PDO::FETCH_ASSOC);
  $resultats->closeCursor();
  
  return $tableau;
}

// fonction permettant de lister les informations d'une piste à partir de son id
// Retourne un tableau associatif
function listerInformationsPiste($id){
  include("configuration/config.php");
  $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
  $requete='SELECT * FROM piste WHERE id='.$id;
  $resultats=$bdd->query($requete);
  $piste=$resultats->fetch(PDO::FETCH_ASSOC);
  $resultats->closeCursor();
  
  return $piste;
}

// fonction permettant d'ajouter une piste'
// Retourne l'id de cette piste
function ajouterPiste($nom,$type,$couleur){
  include("configuration/config.php");
  $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
  
  $nom=$bdd->quote($nom);
  
  $requete='INSERT INTO piste(nom,type,couleur) VALUES('.$nom.',"'.$type.'","'.$couleur.'")';
  $nblignes=$bdd->exec($requete);
    
  return $bdd->lastInsertId();
}

?>