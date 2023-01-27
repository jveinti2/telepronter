<?php
include("conexion.php");

$clave=$_POST['clave'];

$id=$_POST['id'];

if($clave=="Tigo2022+")
{
    $query="DELETE FROM datos1 WHERE id='$id';";
    $resultadoc=$conexion->query($query);
}


header("Location:index.php");  

?>
