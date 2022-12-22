<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="styles/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <head>
        <h2 class="Tittle__General">Usuarios Registrados</h2>
    </head>
    <main class="user__container">
        <?php
        echo MostrarUsuarios();
        ?>
    </main>
    <script src="https://kit.fontawesome.com/49b3e079cc.js" crossorigin="anonymous"></script>
</body>
</html>