<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head>
        <h2>Usuarios Registrados</h2>
    </head>
    <main>
        <?php
        echo MostrarUsuarios();
        ?>
    </main>
</body>
</html>