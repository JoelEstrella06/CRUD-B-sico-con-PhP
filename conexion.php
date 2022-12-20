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
    $sentencia="DELETE FROM productos WHERE id='.$id.'";
    $res = Conexion($sentencia);
    if($res && mysqli_num_rows($res)>0){
        echo ("Se eliminó correctamente");
    }
}

function datauser($query){
    $template = "";
    while($fila=mysqli_fetch_array($query)){
        $template .= "
        <div>
            <p>ID-". $fila['id_user'] ." Usuario-" . $fila['user'] . "</p>
            <p>Nombre-" . $fila['user'] . "</p>
        </div>";
    }
    return $template;
}
function dataProductos($query){
    $template = "";
    while($fila=mysqli_fetch_array($query)){
        $template .= "
        <div>
            <p>ID-Producto ". $fila['id'] ."</p>
            <p>Producto- " . $fila['nombre_producto'] ." Precio. ".$fila['precio']. "</p>
            <p>Descripción<br>" . $fila['descripcion'] . "</p>
            <p>Inventario" . $fila['inventario'] . "</p>
        </div>";
    }
    return $template;
}
?>