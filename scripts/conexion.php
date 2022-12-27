<?php
//user-joelP ps-joelpkstar
function Conexion($sentencia){
    $host="localhost";
    $bd="joelestrellabd";
    $usuario="root";
    $password="";
    $connect=mysqli_connect($host,$usuario,$password,$bd);
    $resultado = mysqli_query($connect, $sentencia);
    return $resultado;
    mysql_close($connect);
}

function buscarUsuario($usuario,$Contraseña){
    $md=md5($Contraseña);
    $sentencia="SELECT user_name FROM usuarios WHERE user='$usuario' AND password='$md'";
    $res = Conexion($sentencia);
    $resuser = "";
    if($res && mysqli_num_rows($res)>0){

        while($fila=mysqli_fetch_array($res)){
            $resuser = $fila['user_name'];
        }
    } else {
        $resuser =false;
    }
    return $resuser;
}

function   MostrarUsuarios(){
    $sentencia = "SELECT * FROM usuarios";
    $res = Conexion($sentencia);
    if($res && mysqli_num_rows($res)>0){
        return datauser($res);
        
    }
}
function   MostrarProductos(){
    $sentencia = "SELECT * FROM productos";
    $res = Conexion($sentencia);
    if($res && mysqli_num_rows($res)>0){
        return dataProductos($res);
    }
}
function SelectProducto($query)
{
    $template = "";
    while($fila=mysqli_fetch_array($query)){
        $template .= "
        <option value='".$fila['id']."'>".$fila['nombre_producto']."</option>";
    }
    return $template;
}

function EliminarProducto($id){
    $sentencia="DELETE FROM productos WHERE id='$id'";
    //echo ($sentencia);
    $res = Conexion($sentencia);
    /*if($res>0){
        echo ("Se eliminó correctamente");
    }*/
    return $res;
}

function datauser($query){
    $template = "";
    while($fila=mysqli_fetch_array($query)){
        $template .= "
        <div class='User__card'>
                <div class='User__card__layout'>
               
                    <div>
                        <i class='fa-solid fa-circle-user'></i>
                    </div>
                    <div class='user__info'>
                        <p><b>ID:</b> ". $fila['id_user'] ."</p>
                        <p><b>Nombre de suario:</b> " . $fila['user'] ." </p>
                        <p><b>Nombre:</b> " . $fila['user'] . "</p>
                    </div>     
                </div>
                <button class='user__card--delete' type='button' onclick='Delete(". $fila['id_user'] .", 'user')'><i class='fa-solid fa-trash'></i></button>                     
        </div>";
    }
    return $template;
}
function dataProductos($query){
    $template = "";
    while($fila=mysqli_fetch_array($query)){
        $template .= "
        <div class='product__card'>
            <div class='product__card__layout'>
                <div>
                    <i class='fa-solid fa-box'></i>
                </div>
                <div class='product__info'>
                    <p><b>ID del Producto:</b> ". $fila['id'] ."</p>
                    <p><b>Producto:</b> " . $fila['nombre_producto'] ."</p>
                    <p><b>Precio:</b> " . $fila['precio'] . "</p>
                    <p><b>Descripción:</b><br>" . $fila['descripcion'] . "</p>
                    <p><b>Inventario:</b> " . $fila['inventario'] . "</p>
                </div>
            </div>
            
            <button class='user__card--delete' type='button' onclick='DeleteProduct(". $fila['id'] .")'><i class='fa-solid fa-trash'></i></button>
        </div>";
    }
    return $template;
}
function sum() {
    $a=$_POST["a"];
    $b=$_POST["b"];
    return $a + $b;
}
?>