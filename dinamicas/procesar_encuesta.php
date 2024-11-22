<?php

// Verificar si se enviaron todos los datos necesarios
if (isset($_POST['edad']) && isset($_POST['favorito']) && 
    isset($_POST['orden']) && isset($_POST['justa']) && 
    isset($_POST['cohesion'])) {
        
    $edad = $_POST['edad'];
    $favorito = $_POST['favorito'];
    $motivo = isset($_POST['motivo']) ? $_POST['motivo'] : 'No especificado';
    $orden = $_POST['orden'];
    $justa = $_POST['justa'];
    $cohesion = $_POST['cohesion'];

    // Mostrar los resultados
    echo "<h1>Resultados de la Encuesta</h1>";
    echo "<p><strong>Edad:</strong> " . htmlspecialchars($edad) . "</p>";
    echo "<p><strong>Autor Favorito:</strong> " . htmlspecialchars(ucfirst($favorito)) . "</p>";
    echo "<p><strong>Motivo:</strong> " . htmlspecialchars($motivo) . "</p>";
    echo "<p><strong>Mismo interés que Weber:</strong> " . htmlspecialchars($orden) . "/5</p>";
    echo "<p><strong>Mismo interés que Marx:</strong> " . htmlspecialchars($justa) . "/5</p>";
    echo "<p><strong>Mismo interés que Durkheim:</strong> " . htmlspecialchars($cohesion) . "/5</p>";
    
    echo '<p><a href="../estaticas/form_encuesta.html">Volver a la encuesta</a></p>';
} else {
    echo "<p>Por favor, completa todos los campos del formulario.</p>";
    echo '<p><a href="../estaticas/form_encuesta.html">Volver a la encuesta</a></p>';
}

include('footer.php');

?>