<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<head>
        <h2>Lista de Productos</h2>
    </head>
    <main id="productos">
        <?php
        echo MostrarProductos();
        ?>
    </main>
</body>
<script src="scripts/main.js">
</script>
</html>