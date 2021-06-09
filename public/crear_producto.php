<?php

    require("../includes/constants.php");
    require("../includes/functions.php");

    $nombre=$_POST["nombre"];
    
    $precio=$_POST["precio"];
   
    $descripcion=$_POST["descripcion"];
   
    $stock=$_POST["stock"];
    
    $imagen=$_POST["imagen"];
  

    $inserccion=query("INSERT INTO `autos` (`Id`, `Modelo`, `Precio`, `Descripción`, `Stock`, `Imagen`) VALUES (NULL, ?, ?, ?, ?, ?)", $nombre, $precio, $descripcion, $stock, $imagen);
    var_dump($inserccion);

    //echo("GUARDADO EN LA BASE DE DATOS");
    redirect();
 
?>
