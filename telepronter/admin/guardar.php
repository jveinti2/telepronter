<?php
include("conexion.php");

$motivos=$_POST['motivos'];
$sondeo1=$_POST['sondeo1'];
$sondeo2=$_POST['sondeo2'];
$reventa=$_POST['reventa'];
$spc1=$_POST['spc1'];
$spc2=$_POST['spc2'];
$tipo=$_POST['tipo'];
$sub_tipo=$_POST['sub_tipo'];
$motivo=$_POST['motivo'];
$observacion=$_POST['observacion'];
$url1=$_POST['url1'];
$url2=$_POST['url2'];

$sql="INSERT INTO datos1 ( motivos, sondeo1, sondeo2, reventa, spc1, spc2, tipo, sub_tipo, motivo, observacion, url1, url2 )
VALUES ('$motivos','$sondeo1','$sondeo2','$reventa' ,'$spc1','$spc2', '$tipo','$sub_tipo','$motivo', '$observacion', '$url1', '$url2')";
$sql_resultado=mysqli_query($conexion, $sql);

if($sql_resultado){  
    Header("Location: index.php");
    
}
else {
    Header("Location: index.php");
}
       

?> 