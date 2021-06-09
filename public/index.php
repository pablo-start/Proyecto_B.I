<?php

require("../includes/constants.php");
require("../includes/functions.php");
if(isset($_GET['q'])){
    $autos=query("SELECT * FROM autos WHERE Modelo LIKE ?", "%".$_GET['q']."%");

}
else{
    $autos=query("SELECT * FROM autos");

}


require("../templates/header.php");
require("../templates/index.php");
?>



