<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['privileges']) || $_SESSION['privileges'] != 1) {
	$putanja = 'http://' . $_SERVER["SERVER_NAME"] . "/" . basename($_SESSION['SITE_URL']) . "/index.php";
	header('Location: ' . $putanja . '/index.php ');
	exit();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/header.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectUserTable.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectDetail.php';

$ProjectId = stripslashes($_GET['id']);
$ProjectId = mysql_real_escape_string($ProjectId);

$uid = new projectUserTable();
if(!empty($_GET['id'])){
$uid->displayTableReport($ProjectId);

$user = $uid->getResult();
//print_r($user);
$attach = new projectDetail(); 
include_once $_SESSION['BASE_PATH']  . '/Admin/View/reportAllView.php';
}
else
{
	echo '<h1>Nije odabran niti jedan projekt</h1>';
}
include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/footer.php'; 
