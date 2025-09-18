<?php
// filepath: c:\xampp\htdocs\Curso_php\procesar_formulario.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Guardar en un archivo de texto
    $archivo = fopen("mensajes.txt", "a");
    fwrite($archivo, "Nombre: $nombre\nCorreo: $correo\nMensaje: $mensaje\n---\n");
    fclose($archivo);

    echo "¡Gracias por tu mensaje!";
} else {
    echo "Acceso no permitido.";
}
?>