<?php

session_start();

//Generate a CSRF token
$_SESSION['SBNR_CSRF_TOKEN'] = bin2hex(random_bytes(32));

//Save-Data Header Support
$saveData = false;
if(isset($_SERVER["HTTP_SAVE_DATA"]) && strtolower($_SERVER["HTTP_SAVE_DATA"]) === "on") {
	$saveData = true;
}

if($SNBR_OBF_MINIFY) {
	ob_start("minifyWhitespace");
}

?>
