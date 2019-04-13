<?php
if(!isset($_SESSION)) {
     session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Class/userDetail.php';

$uid = stripslashes($_GET['UID']);
$uid = mysql_real_escape_string($uid);


$user = new userDetail();
$provjera = $user->deleteUser($uid);

if($provjera != false){
if($_GET['TID'] == "admin"){
	$user->administrator();
}
elseif ($_GET['TID'] == "korisnik")
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
}
else { 
if($_GET['TID'] == "admin"){
	$user->administrator();
}
elseif ($_GET['TID'] == "korisnik")
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
} ?>
<script type="text/javascript">
<!--
alert('Ne možete obrisati odabranog korisnika jel korisnik ima na sebe vezane projekte.');
//-->
</script>

<?php } ?>