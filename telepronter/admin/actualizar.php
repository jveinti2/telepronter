<?php
include("conexion.php");


$id=$_POST['id'];
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


$sql="UPDATE  datos1    SET  motivos='$motivos', sondeo1='$sondeo1', sondeo2='$sondeo2',reventa='$reventa'
,spc1='$spc1',spc2='$spc2', tipo='$tipo', sub_tipo='$sub_tipo', motivo='$motivo',
observacion='$observacion', url1='$url1', url2='$url2' where id='$id'";
$sql_resultado=mysqli_query($conexion, $sql);

//echo $query;

if($sql_resultado){
header("Location:index.php");  
}
else
{
 
header("Location:index.php");     
}



?>






















