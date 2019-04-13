<?php
if(!isset($_SESSION)) {
     session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectUserTable.php';

$uid = new projectUserTable();
$uid->obradjeniTable();
$user = $uid->getResult();
if(!empty($user)){
	
include_once $_SESSION['BASE_PATH']  . '/Admin/View/projectUserTableView.php';
}
else
{
	echo '<h1>Traženi podatci nisu nađeni.</h1>';
}
?>