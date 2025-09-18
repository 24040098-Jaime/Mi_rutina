<?php
// filepath: c:\xampp\htdocs\Curso_php\ver_mensajes.php

$archivo = "mensajes.txt";

echo "<h2>Mensajes recibidos</h2>";

if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    // Convertir saltos de línea en <br> para mostrar bien el texto
    echo nl2br(htmlspecialchars($contenido));
} else {
    echo "No hay mensajes aún.";
}
?>