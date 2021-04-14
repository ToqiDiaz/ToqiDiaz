<?php
include_once("db.php");


if(isset($_POST['save_task'])){


    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $distribuidor = $_POST['distribuidor'];
    $categoria = $_POST['categoria'];
    if(isset($_POST['cantidad'])){
        echo $_POST['cantidad'];
     $cantidad = $_POST['cantidad'];
    
    }
    
    $precioPub = $_POST['precioPub'];
    $precioComer = $_POST['precioComer']; 
    $total = $precioPub + $precioComer;

    $sql = "INSERT INTO productos(name_product , model_product,  
                                distributor_product, category_product, 
                                cant_product, price_product,price_businessman  ) 
    VALUES ('$nombre', '$marca', '$distribuidor', '$categoria', '$cantidad', '$precioPub', '$precioComer')";
   
  echo mysqli_query($con,$sql);  

}
    

