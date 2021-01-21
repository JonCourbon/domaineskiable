<?php
include("partials/init.php");
include("fonctions.php");

$tableauPistesAlpin=listerPistes("alpin");
$tableauPistesNordique=listerPistes("nordique");
$tableauPistesRaquette=listerPistes("raquette");
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
    <h1>PISTES</h1>
  </header>
  
  <div class="row">
    <aside class="col s3">
      <section>
        <h1>Types</h1>
        <ul>
          <li><a href="#alpin">Ski alpin</a></li>
          <li><a href="#nordique">Ski nordique</a></li>
          <li><a href="#raquettes">Raquettes</a></li>
        </ul>
      </section>
    </aside> 
    
    <section class="col s9">
      <article><a name="alpin"></a>
        <header>
          <h1>Ski alpin</h1>
        </header>
        <section>
          <dl>
            <?php 
            for($i=0;$i<count($tableauPistesAlpin);$i++){
              echo '<dt><a href="piste.php?id='.$tableauPistesAlpin[$i]["id"].'"><span class="'.$tableauPistesAlpin[$i]["couleur"].'">'.$tableauPistesAlpin[$i]["nom"].'</span></a></dt>'."\n";
            }
            ?>
          </dl>
        </section>
      </article>
      <article><a name="nordique"></a>
        <header>
          <h1>Ski nordique</h1>
        </header>
        <section>
          <dl>
            <?php 
            for($i=0;$i<count($tableauPistesNordique);$i++){
              echo '<dt><a href="piste.php?id='.$tableauPistesNordique[$i]["id"].'"><span class="'.$tableauPistesNordique[$i]["type"].'">'.$tableauPistesNordique[$i]["nom"].'</span></a></dt>'."\n";
            }
            ?>
          </dl>
        </section>
      </article>
      <article><a name="raquettes"></a>
        <header>
          <h1>Raquettes</h1>
        </header>
        <section>
          <dl>
            <?php 
            for($i=0;$i<count($tableauPistesRaquette);$i++){
              echo '<dt><a href="piste.php?id='.$tableauPistesRaquette[$i]["id"].'"><span class="'.$tableauPistesRaquette[$i]["type"].'">'.$tableauPistesRaquette[$i]["nom"].'</span></a></dt>'."\n";
            }
            ?>
          </dl>
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