<nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo"><img src="images/logo.png" alt="logo"></img></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="pistes.php">Pistes</a></li>
      <li><a href="remontees.php">Remontées</a></li>
      <?php
      if(isset($_SESSION["connecte"])){
        echo '<li><a href="scripts/deconnecter.php">Déconnection';
        if($_SESSION["connecte"]=="ADMIN"){
          echo '(admin)';
        }
        else if($_SESSION["connecte"]=="MEMBRE"){
            echo '(membre)';
          }
        echo '</a></li>';
      }
      else{
        echo '<li><a href="connection.php">Connection</a></li>';
      }
      ?>
      
    </ul>
  </div>
</nav>