<?php
if(!isset($_SESSION)) {
     session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Class/userDetail.php';

$_SESSION['UserId'] = stripslashes($_SESSION['UserId']);
$_SESSION['UserId'] = mysql_real_escape_string($_SESSION['UserId']);
$upit = stripslashes($_GET['Upit']);
$upit = mysql_real_escape_string($upit);
$user = new userDetail();
$user->searchUserTable($upit);

$userData = $user->getResult();
if(!empty($userData)){
include_once $_SESSION['BASE_PATH']  . '/Admin/View/userAdministrationTableView.php';
}
else
{
	echo '<h1>Traženi podatci nisu nađeni.</h1>';
}
?>