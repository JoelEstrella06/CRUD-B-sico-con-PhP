<?php
include("conexion.php");
$usuario = $_POST["User"];
$contraseña=$_POST["password"];

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
    <main>
        <?php
        $resUser=buscarUsuario($usuario, $contraseña);
        if(!$resUser){
           
            echo ("<h2>Usuario o contraseña incorrectos</h2>");
        }
        else{
             echo("
                <h2>buenvenido $resUser</h2>
                <div>
                    <div>
                        <p>¿Qué desea realizar?</p>
                    </div>
                    <a href='usuarios.php'>Catálogo de usuarios</a>
                    <a href='productos.php'>Catálogo de Productos</a>
                    <a href=''>Actualizar Producto</a>
                    <a href=''>Eliminar Producto</a>
                </div>
             ");
        }
        ?>
    </main>
    
</body>
</html>