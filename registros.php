<link rel="stylesheet" type="text/css" href="Css/styles.css" media="screen"/>
<ul id="u">
  <li id="me"><a id="b" href="login.php">Inicio</a></li>
  <li id="me"><a id="b" href="registros.php">Registros</a></li>
  <li id="me"><a id="b" href="usuario.php">Usuarios</a></li>
  <li id="me"><a id="b" href="logout.php">Salir</a></li>
</ul>
<?php
require_once "script/pdocrud.php";
$pdocrud = new PDOCrud(false, "pure", "pure");

echo $pdocrud->dbTable("registros")->render(); 
?>
