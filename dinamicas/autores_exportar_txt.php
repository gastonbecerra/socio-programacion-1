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

$i = array_rand($autores);

$contenido = "Autor #" . ($i + 1) . ": " . $autores[$i] . "\n";

$nombre_archivo = "autor_seleccionado.txt";
file_put_contents($nombre_archivo, $contenido);

// Forzar la descarga del archivo
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="' . $nombre_archivo . '"');
header('Content-Length: ' . filesize($nombre_archivo));
readfile($nombre_archivo);

// Eliminar el archivo del servidor después de ser descargado
unlink($nombre_archivo);