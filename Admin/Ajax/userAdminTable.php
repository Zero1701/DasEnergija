<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Class/userDetail.php';



$user = new userDetail();

if($_GET['Table'] == 1){
	$user->administrator();
}
elseif ($_GET['Table'] == 0)
{
	$user->user();
}
else
{
	$user->displayUser();
}
$userData = $user->getResult();

if(!empty($userData)){

	include_once $_SESSION['BASE_PATH']  . '/Admin/View/userAdministrationTableView.php';
}
else
{
	echo '<h1>Traženi podatci nisu nađeni.</h1>';
}
?>