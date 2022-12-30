<?php
include('conexion.php');

$type_table=$_POST["tabla"];

if ($type_table=="producto"){
    $id=$_POST["idElemento"];
    //echo("recibimos prodcuto");
    $res=EliminarProducto($id);
    if ($res>0){
        echo MostrarProductos();
    }
}
if ($type_table=="newProduct"){
    $res=addProducto($_POST["Product"],$_POST["user"], $_POST["description"],$_POST["price"], $_POST["stock"]);
    if ($res>0){
        echo MostrarProductos();
    }
    //echo("new Product");
}
?>