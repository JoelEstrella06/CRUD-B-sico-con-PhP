<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="styles/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<head>
        <h2 class="Tittle__General">Lista de Productos</h2>
    </head>
    <main id="productos" class="products__container">
        <?php
        echo MostrarProductos();
        ?>
    </main>
</body>
<script src="https://kit.fontawesome.com/49b3e079cc.js" crossorigin="anonymous"></script>
<script src="scripts/main.js">
    
</script>
</html>