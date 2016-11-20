<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Comprovar divisors</title>
</head>

<body>
    <form method="get" action="comprovar_divisors.php">
        <label for="n">Entra un número: </label><br/>
        <input type="text" name="n" required="">
        <input type="submit" value="Enviar">
      <?php
        function calcularDivisors($n, $resultat = false) {
        $a = array();
          for($i=1;$i<=floor($n/2);$i++) {
            if($n%$i == 0) { $arr[] = $i; }
          }
          $a[] = $n;
          return ($resultat ? $a : count($a));
          }
      ?>
    </form>

    <br>
    <a href="menu.php">Tornar enrere</a>

</body>

</html>