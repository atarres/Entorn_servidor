<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
        
        <title>Menú</title>
    </head>
    <body>
      <?php
      session_start();
      if (isset($_SESSION['usuari'])) {
        echo "Has entrat com a: ".$_SESSION['usuari'];
      }
      ?>
      
        <ul>
            <li><a href="comprovar_divisors.php">Comprovar divisors</a></li>
            <li><a href="conjetura_collatz.php">Conjetura collatz</a></li>
            <li><a href="formulari_login.html">Sortir</a></li>
        </ul>
        
    
</body></html>