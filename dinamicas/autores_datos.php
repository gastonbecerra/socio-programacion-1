<?php

// Array simple de nombres de autores
$autores = array(
  "Karl Marx",
  "Max Weber",
  "Émile Durkheim",
  "Michel Foucault",
  "Pierre Bourdieu",
  "Zygmunt Bauman"
);

// Verificamos si se ha pasado un valor 'i' por GET
if (isset($_GET['i']) && is_numeric($_GET['i']) ) {
  $i = $_GET['i'];
} else {
  // Si no se pasa 'i' o es inválido, seleccionamos un autor al azar
  $i = array_rand($autores);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Autor de sociología</title>
</head>
<body>
  <h1>Autor de sociología:</h1>
  <p>Autor #<?php echo $i + 1; ?>: <?php echo $autores[$i]; ?></p>

  <?php
  require('footer.php');
  ?>

</body>
</html>
