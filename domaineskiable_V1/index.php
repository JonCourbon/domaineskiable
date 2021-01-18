<?php
include("partials/init.php");
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
        <h1>Menu</h1>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
        </ul>
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