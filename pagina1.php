<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página1.php</title>
    <style>
        .div1 {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="div1">
        <h1>Formulario de Edad</h1>
        <form action="validar.php" method="post">
            Fecha de Nacimiento: <input type="date" name="fecha_nacimiento" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>