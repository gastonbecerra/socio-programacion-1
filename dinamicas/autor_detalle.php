<?php
// Leer el archivo JSON
$json_str = file_get_contents('../datos/autores.json');
$autores = json_decode($json_str, true);

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Autores</title>";
echo "</head>";
echo "<body>";

// Verificar si se ha pasado un ID por GET
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Hay un id, entonces mostrar detalles del autor seleccionado
    $id = $_GET['id'];
    echo "<h1>Detalles del autor</h1>";
    echo "<p><strong>Nombre:</strong> " . $autores[$id]['nombre'] . "</p>";
    echo "<p><strong>Obra:</strong> " . $autores[$id]['obra'] . "</p>";
    echo "<p><strong>Concepto:</strong> " . $autores[$id]['concepto'] . "</p>";
    echo "<p><a href='?'>volver al listado de autores</a></p>";

} else {
    // Mostrar los nombres de los autores como enlaces
    echo "<h1>Lista de Autores</h1>";
    foreach ($autores as $index => $autor) {
        echo "<p><a href='?id=" . $index . "'>" . $autor['nombre'] . "</a></p>";
    }
}

require('footer.php');

echo "</body>";
echo "</html>";

?>
