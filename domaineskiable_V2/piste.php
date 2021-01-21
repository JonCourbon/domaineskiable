<?php
include("partials/init.php");

include("fonctions.php");
$id=$_GET["id"];
$piste=listerInformationsPiste($id);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Gestion du domaine skiable: PISTES</title>
  <meta name="description" content="Gestion du domaine skiable"/>
  
  <!-- Import du CSS de la librairie Materialize https://materializecss.com -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
  <link rel="stylesheet" media="screen" href="css/style.css">
  
</head>
<body class="<?php $classcouleurfond;?>">  
  <?php include('partials/nav.php'); ?>
  <header>
    <h1>PISTE: <?php echo $piste["nom"];?></h1>
  </header>
  
  <div class="row">
    <aside class="col s3">
      <section>
        <h1>Autres pistes</h1>
        <ul>
          <li><a href="pistes.php#alpin">Ski alpin</a></li>
          <li><a href="pistes.php#nordique">Ski nordique</a></li>
          <li><a href="pistes.php#raquettes">Raquettes</a></li>
        </ul>
      </section>
    </aside> 
    
    <section class="col s9">
      <article>
        <header>
          <h1>A propos de la piste</h1>
        </header>
        <section>
          Piste de type: <?php echo $piste["type"];?><br/>
          Couleur: <?php echo $piste["couleur"];?>
        </section>
        <?php if($_SESSION["connecte"]=="ADMIN"): ?>
          <footer>
            <a href="scripts/supprimerPiste.php?id=<?php echo $id;?>">Supprimer piste</a>
          </footer>
        <?php endif;?>
      </article>
      
    </section>
    
    
  </div>
  <?php include('partials/footer.php'); ?>
  
  <!-- Import du Js de la librairie Materialize https://materializecss.com -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <script src="js/script.js"></script>
  
</body>
</html>        