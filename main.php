<?php
include("scripts/conexion.php");
$usuario = $_POST["User"];
$contraseña=$_POST["password"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="styles/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <main class="main__dashboard">
        <?php
        $resUser=buscarUsuario($usuario, $contraseña);
        if(!$resUser){
           
            echo ("
            <div class='dashboard__tittle'>
                <h2>Usuario o contraseña incorrectos</h2>
            </div>
            ");
        }
        else{
             echo("
                <div class='dashboard__tittle'>
                    <h2>Bienvenido $resUser</h2>
                </div>                
                <div class='dashboard__options'>
                    <div class='dashboard__tittle'>
                        <p>¿Qué desea realizar?</p>
                    </div>
                    <div class='dashboard__links'>
                        <a href='usuarios.php'><i class='fa-solid fa-users'></i> Usuarios</a>
                        <a href='productos.php'><i class='fa-solid fa-boxes-stacked'></i> Productos</a>
                        <a href=''><i class='fa-solid fa-arrows-rotate'></i> Actualizar Producto</a>
                        <a href=''><i class='fa-solid fa-trash-can'></i> Eliminar Producto</a>
                    </div>                   
                </div>
             ");
        }
        ?>
    </main>
    <script src="https://kit.fontawesome.com/49b3e079cc.js" crossorigin="anonymous"></script>
</body>
</html>