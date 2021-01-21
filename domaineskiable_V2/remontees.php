<?php
include("partials/init.php");
include("fonctions.php");
$tableauRemontees=listerRemontees();
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
    <h1>REMONTEES</h1>
  </header>
  
  <div class="row">
    <aside class="col s3">
      <section>
        <h1>Types</h1>
        <ul>
          <li><a href="#telepherique">Téléphériques</a></li>
          <li><a href="#telesiege">Télésièges</a></li>
          <li><a href="#teleski">Téléskis</a></li>
        </ul>
      </section>
    </aside> 
    
    <section class="col s9">
      <article><a name="telepherique"></a>
        <header>
          <h1></h1>
        </header>
        <section>
          <ul>
<?php 
for($i=0;$i<count($tableauRemontees);$i++){
  echo '<li>'.$tableauRemontees[$i]["nom"].'('.$tableauRemontees[$i]["type"].')</li>'."\n";
}
?>
</ul>
        </section>
      </article>
      
    </section>
    
    
  </div>
  <?php include('partials/footer.php'); ?>
  
  <!-- Import du Js de la librairie Materialize https://materializecss.com -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <script src="js/script.js"></script>
  
</body>
</html>        