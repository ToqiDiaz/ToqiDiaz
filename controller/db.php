<?php


$server = "localhost";
$username = "root";
$pass = "";
$db = "tienda";

$con = mysqli_connect($server, $username, $pass, $db);

if ($con) {
    
 } else {
    echo "Conexion no EXITOSA";
    error_log("Conexion no EXITOSA");
}
