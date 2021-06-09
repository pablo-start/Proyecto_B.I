<?php
    require("../includes/constants.php");
    require("../includes/functions.php");
    //echo($_GET["auto"]);
    $auto=query("SELECT * FROM autos WHERE id=?", $_GET['auto'])[0];

    require("../templates/header.php");
    require("../templates/form_editar.php"); 

?>