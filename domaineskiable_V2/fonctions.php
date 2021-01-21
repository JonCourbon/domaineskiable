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

 
/*
Schéma de la table piste:
piste(id,nom,type, couleur)
*/

// fonction permettant de lister toutes les pistes d'un certain type
// Retourne un tableau indexé de tableaux associatifs
function listerPistes($type){
  include("configuration/config.php");
  $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
  $requete='SELECT * FROM piste WHERE type="'.$type.'" ORDER by nom';
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

/*
Schéma de la table remontee:
remontee(id,nom,type, etat)
*/

// fonction permettant de lister toutes les remontees
// Retourne un tableau indexé de tableaux associatifs
function listerRemontees(){
  include("configuration/config.php");
  $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
  $requete='SELECT * FROM remontee ORDER by type';
  $resultats=$bdd->query($requete);
  $tableau=$resultats->fetchAll(PDO::FETCH_ASSOC);
  $resultats->closeCursor();
  
  return $tableau;
}

?>