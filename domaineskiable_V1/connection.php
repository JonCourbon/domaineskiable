<?php
session_start();
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
<body>
  
  <?php include('partials/nav.php'); ?>
  <header>
    <h1>Connection</h1>
  </header>
  
  
  <div class="row">
    <form class="col s12" method="POST" action="scripts/se_connecter.php">
      <div class="row">
        <div class="input-field col s6">
          <input id="email" name="email" type="email" class="validate" required="required">
          <label for="email">Email*</label>
        </div>
        <div class="input-field col s6">
          <input id="password" name="password" type="password" class="validate" required="required">
          <label for="password">Mot de passe*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
            <input type="submit" class="btn waves-effect waves-light"  value="Se connecter" ></input>
        </div>
      </div>


    </form>
  </div>
        
    <?php include('partials/footer.php'); ?>
    
    <!-- Import du Js de la librairie Materialize https://materializecss.com -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script src="js/script.js"></script>
    
  </body>
  </html>        