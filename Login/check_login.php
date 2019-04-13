<?php
if(!isset($_SESSION)) {
     session_start();
}
include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM `user` WHERE UserName='" . $myusername . "' and Password=md5('" . $mypassword . "')";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
$id = $row['idUser'];
$name = $row['Name'];
$lname = $row['LastName'];

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
	$query = "SELECT * FROM `role` WHERE idUser_FK = " . $row['idUser'];
	
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['myusername'] = $myusername;
	//$_SESSION['mypassword'] = $mypassword;
	$_SESSION['privileges'] = $row['Administrator'];
	$_SESSION['UserId'] = $id;
	$_SESSION['Name'] = $name;
	$_SESSION['LastName'] = $lname;
	
	if($_SESSION['privileges'] == 1){
	
header("location:" . $_SESSION['SITE_URL'] . "/Admin");
	}
	else 
	{
	header("location:" . $_SESSION['SITE_URL'] . "/User");
	}
}
else {
	echo "Wrong Username or Password";
}
?>