<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Class/userDetail.php';


$userId = stripslashes($_GET['UID']);
$userId = mysql_real_escape_string($userId);

$uid = new userDetail();
$provjera = $uid->obradiUser($userId, $_GET['Status']);

if($provjera != false){
	if($_GET['TID'] == "admin"){
		$uid->administrator();
	}
	elseif ($_GET['TID'] == "korisnik")
	{
		$uid->user();
	}
	else
	{
		$uid->displayUser();
	}
	$userData = $uid->getResult();
	if(!empty($userData)){

		include_once $_SESSION['BASE_PATH']  . '/Admin/View/userAdministrationTableView.php';
	}
	else
	{
		echo '<h1>Traženi podatci nisu nađeni.</h1>';
	}

}
else
{
	if($_GET['TID'] == "admin"){
		$uid->administrator();
	}
	elseif ($_GET['TID'] == "korisnik")
	{
		$uid->user();
	}
	else
	{
		$uid->displayUser();
	}
	$userData = $uid->getResult();
	if(!empty($userData)){
	
		include_once $_SESSION['BASE_PATH']  . '/Admin/View/userAdministrationTableView.php';
	}
	else
	{
		echo '<h1>Traženi podatci nisu nađeni.</h1>';
	} ?>
<script type="text/javascript">
<!--
alert('Mora uvijek postojati barem jedan korisnik s administratorskim ovlastima.');
//-->
</script>
<?php } ?>