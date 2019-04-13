<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Ajax/userVariable.php';

	$query1 = "update `role` set Administrator = " . $ovlasti . " , DOC = NOW() where `idUser_FK` = " . $id;
	
	"insert into `user` (`Name`,`LastName`,`UserName`,`Password`,`DOE`,`DOC`) values ('" . $ime . "','" . $prezime . "','" . $userName . "',md5('" . $password . "'),NOW(),NOW())";


	if(trim($password) == "")
	{
		$query2 = "update  `user` set `Name`  = '" . $ime . "' , `LastName` = '" . $prezime . "' , `UserName` = '" . $userName . "' WHERE `idUser` = " . $id;
	}
else 
{
	$query2 = "update  `user` set `Name`  = '" . $ime . "' , `LastName` = '" . $prezime . "' , `UserName` = '" . $userName . "' , Password = md5('" . $password . "') WHERE `idUser` = " . $id;
}

	mysql_query($query1);
	mysql_query($query2);
