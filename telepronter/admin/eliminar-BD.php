<?php
include("conexion.php");



$clave=$_POST['clave'];

$id =$_POST['id'];

if($clave=="Tigo2022+")
{
    
    $query="DELETE FROM datos1 ";
    $resultadoc=$conexion->query($query);

}

header("Location:index.php");  

?>