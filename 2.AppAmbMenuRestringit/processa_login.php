<?php
setcookie('usuari', $nom);
$usuari = $_REQUEST['usuari'];
$contrasenya = $_REQUEST['contrasenya'];

if ($_POST["usuari"]=="admin" && $_POST["contrasenya"]=="admin" ) {
  session_start();
  $_SESSION['usuari'] = "admin";
  header("Location: menu.php");
} else {
  header("Location: sortir.php");
}
?>