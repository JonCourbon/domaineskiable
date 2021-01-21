<?php
include("partials/init.php");
include("fonctions.php");
$nbvisites=ajouterVisites();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Gestion du domaine skiable</title>
  <meta name="description" content="Gestion du domaine skiable"/>
  
  <!-- Import du CSS de la librairie Materialize https://materializecss.com -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
  <link rel="stylesheet" media="screen" href="css/style.css">
  
</head>
<body class="<?php $classcouleurfond;?>">
  
  <?php include('partials/nav.php'); ?>
  <header>
    <h1>Application de gestion du domaine skiable</h1>
  </header>
  
  <div class="row">
    <aside class="col s3">
      <section>
        Nombre de visites de cette page: <?php echo $nbvisites;  ?> <br/>
      <?php 
      if($_SESSION["connecte"]=="ADMIN"){
        echo "Vous êtes connecté en tant qu'admin";
      }
      else if($_SESSION["connecte"]=="MEMBRE"){
          echo "Vous êtes connecté en tant que membre";
        }
        else{
          echo "Vous n'êtes pas connecté. Pour se connecter: <a href=\"connection.php\">Connection</a>";
        }
       ?>
       </section>
    </aside> 
    
    <section class="col s9">
      <article>
        <header>
          <h1>Article #1</h1>
        </header>
        <section>
          This is the first article.
        </section>
      </article>
      <article>
        <header>
          <h1>Article #2</h1>
        </header>
        <section>
          This is the second article.
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