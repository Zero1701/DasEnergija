<?php
if(!isset($_SESSION)) {
     session_start();
}
else {
	$_SESSION = array();
	session_destroy();
	session_start();
}
$_SESSION['BASE_PATH'] = realpath('.');
$_SESSION['BASE_URL'] = dirname($_SERVER["SCRIPT_NAME"]);
$_SESSION['SITE_URL'] = 'http://' . $_SERVER["SERVER_NAME"] . $_SESSION['BASE_URL'];
include 'Login/main_login.php';




