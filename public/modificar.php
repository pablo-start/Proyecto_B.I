<?php

    require("../includes/constants.php");
    require("../includes/functions.php");
     //echo("hola");

    $nombre=$_POST["nombre"];
    //echo($nombre);
    
    $precio=$_POST["precio"];
    //echo($precio);
   
    $descripcion=$_POST["descripcion"];
    //echo($descripcion);
   
    $stock=$_POST["stock"];
    //echo($stock);
    
    $imagen=$_POST["imagen"];
    //echo($imagen);
  

    $editar=query("UPDATE `autos` SET `Modelo` = ?, `Precio` = ?, `Descripción` = ?, `Stock` = ?, `Imagen` = ? WHERE Id=?", $nombre, $precio, $descripcion, $stock, $imagen, $_GET['Id']);
    var_dump($editar);
    
    //echo("GUARDADO EN LA BASE DE DATOS");
    redirect();
 
?>