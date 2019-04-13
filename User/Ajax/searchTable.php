<?php
if(!isset($_SESSION)) {
     session_start();
}

include_once $_SESSION['BASE_PATH']  . '/User/Class/projectUserTable.php';

$_SESSION['UserId'] = stripslashes($_SESSION['UserId']);
$_SESSION['UserId'] = mysql_real_escape_string($_SESSION['UserId']);
$_GET['Upit'] = stripslashes($_GET['Upit']);
$_GET['Upit'] = mysql_real_escape_string($_GET['Upit']);
$uid = new projectUserTable();
$uid->searchTable($_SESSION['UserId'],$_GET['Upit']);
$user = $uid->getResult();
if(!empty($user)){
include_once $_SESSION['BASE_PATH']  . '/User/View/projectUserTableView.php';
}
else
{
	echo '<h1>Traženi podatci nisu nađeni.</h1>';
}
?>