<?php
if(!isset($_SESSION)) {
     session_start();
}
$url = $_SESSION['SITE_URL'];
session_destroy();
header("location:" . $url . "/index.php");
?>
