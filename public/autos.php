<?php
require("../includes/constants.php");
require("../includes/functions.php");

$y=query("SELECT * FROM autos WHERE id=?", $_GET['auto'])[0];



require("../templates/header.php");
require("../templates/autos.php");
?>
