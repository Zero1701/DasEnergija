<?php
if(!isset($_SESSION)) {
     session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectUserTable.php';

$uidd = stripslashes($_SESSION['UserId']);
$uidd = mysql_real_escape_string($uidd);
$projectId = stripslashes($_GET['PID']);
$projectId = mysql_real_escape_string($projectId);

$uid = new projectUserTable();
$uid->obradiProject($projectId, $_GET['Status']);
if($_GET['TID'] == "dolazno"){
	$uid->dolazniTable();
}
elseif ($_GET['TID'] == "obradjeno")
{
	$uid->obradjeniTable();
}
else
{
$uid->displayTable($uidd);
}
$user = $uid->getResult();
if(!empty($user)){
	
include_once $_SESSION['BASE_PATH']  . '/Admin/View/projectUserTableView.php';
}
else
{
	echo '<h1>Traženi podatci nisu nađeni.</h1>';
}
?>