<?php
include_once("db.php");


if(isset($_POST['btnGuardar'])){


    $categoria = $_POST['nombreCategoria'];

    $sql = "INSERT INTO categoria(category) 
    VALUES ('$categoria')";

    $result = $con->query($sql);
    
    if(!$result){
        die ("Query Fail");
    }
    echo ("save");
        
    }
