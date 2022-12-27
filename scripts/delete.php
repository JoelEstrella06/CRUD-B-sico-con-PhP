<?php
include('conexion.php');
$id=$_POST["idElemento"];
$type_table=$_POST["tabla"];

if ($type_table=="producto"){
    //echo("recibimos prodcuto");
    $res=EliminarProducto($id);
    if ($res>0){
        echo MostrarProductos();
    }
}
?>