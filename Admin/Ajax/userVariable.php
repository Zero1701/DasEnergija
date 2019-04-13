<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';

if(isset($_GET['ime'])){ $ime = $_GET['ime']; $ime = stripslashes($ime); $ime = mysql_real_escape_string($ime); } else { $ime = ""; }

if(isset($_GET['prezime'])){ $prezime = $_GET['prezime']; $prezime = stripslashes($prezime); $prezime = mysql_real_escape_string(trim($prezime)); } else { $prezime = ""; }

if(isset($_GET['ovlasti'])){ $ovlasti = $_GET['ovlasti']; $ovlasti = stripslashes($ovlasti); $ovlasti = mysql_real_escape_string(trim($ovlasti)); } else { $ovlasti = 0; }

if(isset($_GET['userName'])){ $userName = $_GET['userName']; $userName = stripslashes($userName); $userName = mysql_real_escape_string(trim($userName)); } else { $userName = ""; }

if(isset($_GET['password'])){ $password = $_GET['password']; $password = stripslashes($password); $password = mysql_real_escape_string(trim($password)); } else { $password = ""; }

if(isset($_GET['id'])){ $id = $_GET['id']; $id = stripslashes($id); $id = mysql_real_escape_string($id); } else { $id = "null"; }


