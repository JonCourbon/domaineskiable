<nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="pistes.php">Pistes</a></li>
      <li><a href="remontees.php">Remontées</a></li>
      <?php
      if(isset($_SESSION["connecte"])){
        echo '<li><a href="scripts/deconnecter.php">Déconnection</a></li>';
      }
      else{
        echo '<li><a href="connection.php">Connection</a></li>';
      }
      ?>
      
    </ul>
  </div>
</nav>