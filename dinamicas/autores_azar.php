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

$i = array_rand($autores); // selecciona una clave aleatoria en un array 

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
