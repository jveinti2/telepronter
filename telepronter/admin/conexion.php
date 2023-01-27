<?php


$conexion = mysqli_connect(
    $host = "10.1.1.195",
    $username = "App_telepronte_comercial",
    $password = "eRaEWUPl*GUbB8+nh8&Hw9k",
    $database = "db_telepronte_comercial"
  
);
$conexion->set_charset("utf8");
if (!$conexion){
    die("Conexión caida con la BD" . mysqli_connect_error());
}

error_reporting(0);