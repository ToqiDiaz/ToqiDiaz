<?php
include_once("db.php");


$query = "SELECT * FROM productos";
$resultado = $con->query($query);


if(!$resultado){
    die('Error');
}else{
    while ($data = mysqli_fetch_assoc($resultado)){
        $arreglo["data"][] = $data;

    }
    echo json_encode($arreglo);

}
mysqli_free_result($resultado);
mysqli_close($con);




?>