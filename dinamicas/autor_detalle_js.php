<?php
// Leer el archivo JSON
$json_str = file_get_contents('../datos/autores.json');
$autores = json_decode($json_str, true);

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Autores de Sociología</title>";
echo "<style>
    table { width: 50%; margin: 20px auto; border-collapse: collapse; }
    td, th { border: 1px solid #000; padding: 10px; text-align: center; cursor: pointer; }
    #autorSeleccionado { margin: 20px; text-align: center; font-size: 20px; color: blue; }
</style>";
echo "</head>";
echo "<body>";

// Iniciar la tabla
echo "<table border='1'>";
echo "<tr><th>Obra</th><th>Concepto</th></tr>";

// Recorrer el JSON y mostrar solo las obras y los conceptos
foreach ($autores as $index => $autor) {
    echo "<tr onclick='mostrarAutor(\"" . $autor['nombre'] . "\")'>";
    echo "<td>" . $autor['obra'] . "</td>";
    echo "<td>" . $autor['concepto'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Div para mostrar el nombre del autor seleccionado
echo "<div id='autorSeleccionado'></div>";

// JavaScript para manejar los clics
echo "<script>
    function mostrarAutor(nombre) {
        document.getElementById('autorSeleccionado').innerText = 'Autor: ' + nombre;
    }
</script>";

require('footer.php');

echo "</body>";
echo "</html>";
?>
