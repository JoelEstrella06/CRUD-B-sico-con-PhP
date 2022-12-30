<?php
include("scripts/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="styles/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <main class="main__card"> 
        <div class="main__tittle">
            <i class="fa-solid fa-box"></i>
            <h2 class="Main__tittle__text">Actualizar Producto</h2>
        </div>
        <form method=""class="modal__form">
            <label>
                Prodcuto: 
                <select name="Producto" id="Producto" onchange="UpdateProduct()">
                    <?php
                        echo ListarProductos();
                    ?>
                </select>
            </label>
            <button class="btn__loging">Actualizar <i class="fa-solid fa-right-to-bracket"></i></button>
        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/49b3e079cc.js" crossorigin="anonymous"></script> 
    <script src="scripts/main.js"></script>
</body>
</html>