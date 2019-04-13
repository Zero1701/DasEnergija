<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Ajax/userVariable.php';

	$query1 = "insert into `user` (`Name`,`LastName`,`UserName`,`Password`,`DOE`,`DOC`) values ('" . $ime . "','" . $prezime . "','" . $userName . "',md5('" . $password . "'),NOW(),NOW())";
	$query2 = "SELECT LAST_INSERT_ID() as idl;";

	mysql_query($query1);
	$lastProjectId = mysql_result(mysql_query($query2),0);


	$query3 = "insert into `role` (`idUser_FK`,`Administrator`,`DOE`,`DOC`) values (" . $lastProjectId . "," . $ovlasti . ",NOW(),NOW())";


	mysql_query($query3);
	
