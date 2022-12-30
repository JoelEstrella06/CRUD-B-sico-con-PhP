<?php
include("scripts/conexion.php");
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
    <div id="add" class="button__add__product">
        <i class="fa-solid fa-plus"></i>
    </div>
    <div id="modal" class="modal oculto">
        <div class="modal__form--container">
            <div class="btn__close">
                <i  id="btn__close" class="fa-solid fa-circle-xmark"></i>
            </div>
            <h2 class="Tittle__General">Añadir nuevo Producto</h2>
            <form action="" id="form__newProduct" class="modal__form">
                <label for="nameProduct">
                    Nombre del producto:
                    <input type="text" name="Product" id="nameProduct" required placeholder="Product name">
                </label>
                <label for="user">
                    Usuario:
                    <select name="user" id="user">
                        <?php
                        echo ListarUsuarios();
                        ?>
                    </select>
                </label>
                <label for="description">
                    Nombre del producto:
                    <textarea name="description" id="description" cols="30" rows="10" required placeholder="Description here"></textarea>
                </label>
                <label for="price">
                    Precio: $
                    <input type="number" name="price" id="price" required min=0 value="0">
                </label>
                <label for="stock">
                    Stock:
                    <input type="number" name="stock" id="stock" required min=0 value="0">
                </label>
                <div class="modal__form__btn--container">
                    <input type="submit" value="Registrar" id="btnRegister" class="btn__loging">
                </div>
                
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://kit.fontawesome.com/49b3e079cc.js" crossorigin="anonymous"></script>
<script src="scripts/main.js"></script>
<script src="scripts/buttons.js"></script>
</html>