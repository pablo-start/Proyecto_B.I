<?php

    require("../includes/constants.php");
    require("../includes/functions.php");

    $eliminar=query("DELETE FROM `autos` WHERE Id=?", $_GET['auto']);
    var_dump($eliminar);

    //echo("BORRADO DE LA BASE DE DATOS");

    redirect();
 
?>