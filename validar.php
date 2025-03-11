<?php
// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fecha_nacimiento'])) {
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $fechaNacimiento = new DateTime($fechaNacimiento);
    $fechaActual = new DateTime();
    $edad = $fechaActual->diff($fechaNacimiento)->y;
    if ($edad >= 18) {
        // Redirigir a la página de imagen
        header("Location: mayor_de_edad.php");
        exit;
    } else {
        // Redirigir a la página de inicio
        header("Location: menor_de_edad.php");
        exit;
    }
} else {
    // Si el formulario no se envió correctamente, redirigir de nuevo a la página de formulario
    header("Location: pagina1.php");
    exit;
}
?>