<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['privileges']) || $_SESSION['privileges'] != 1) {
	$putanja = 'http://' . $_SERVER["SERVER_NAME"] . "/" . basename($_SESSION['SITE_URL']) . "/index.php";
	header('Location: ' . $putanja . '/index.php ');
	exit();
}
//include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectUserTable.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectDetail.php';
$uid = stripslashes($_GET['UID']);
$uid = mysql_real_escape_string($uid);

$uidd = new projectUserTable();
$uidd->displayTableByUser($uid);
$details = $uidd->getResult();
$attach = new projectDetail();
//print_r($details);

//$sql = "select * from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where c.idUser = " . $uid;
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlSviProjekti = "select count(a.idProject) as Sprojekti from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK";
$result=mysql_query($sqlSviProjekti);
$row = mysql_fetch_array($result);
$SviProjekti = $row['Sprojekti'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnoProjekata = "select count(a.idProject) as ukupnoProjekata from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where c.idUser = " . $uid;
$result=mysql_query($sqlUkupnoProjekata);
$row = mysql_fetch_array($result);
$UkupnoProjekata = $row['ukupnoProjekata'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$sqlPotpisaniUgovori = "select count(a.DateOfContSigning) as DOS from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where c.idUser = " . $uid . " and a.DateOfContSigning IS NOT NULL and a.DateOfContSigning <> ''";
$result=mysql_query($sqlPotpisaniUgovori);
$row = mysql_fetch_array($result);
$PotpisaniUgovori  = $row['DOS'];

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlSviSkopljeniUgovori = "select count(a.idProject) as Sprojekti from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> ''";
$result=mysql_query($sqlSviSkopljeniUgovori );
$row = mysql_fetch_array($result);
$SviSkopljeniUgovori = $row['Sprojekti'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnoSkopljeniUgovori = "select count(a.idProject) as Sprojekti from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> '' and c.idUser = " . $uid;
$result=mysql_query($sqlUkupnoSkopljeniUgovori );
$row = mysql_fetch_array($result);
$UkupnoSkopljeniUgovori = $row['Sprojekti'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlMaxPowUgovoreno = "select sum(d.PowerSupplySystem) as maxPow from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where c.idUser = " . $uid;
$result=mysql_query($sqlMaxPowUgovoreno);
$row = mysql_fetch_array($result);
$MaxPowUgovoreno = $row['maxPow'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlMaxPowSvi = "select sum(d.PowerSupplySystem) as maxPow from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK";
$result=mysql_query($sqlMaxPowSvi);
$row = mysql_fetch_array($result);
$MaxPowSvi = $row['maxPow'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlMaxPowCont = "select sum(d.PowerSupplySystem) as maxPow from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> '' and c.idUser = " . $uid;
$result=mysql_query($sqlMaxPowCont);
$row = mysql_fetch_array($result);
$MaxPowCont = $row['maxPow'];
if($row['maxPow'] == 0){
	$MaxPowCont = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlAnnualPow = "select sum(d.ExpectedAnnualProduction) as annualPow from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where c.idUser = " . $uid;
$result=mysql_query($sqlAnnualPow);
$row = mysql_fetch_array($result);
$AnnualPow = $row['annualPow'];
if($row['annualPow'] == 0){
	$AnnualPow = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlAnnualPowCont = "select sum(d.ExpectedAnnualProduction) as annualPow from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where c.idUser = " . $uid . " and d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> ''";
$result=mysql_query($sqlAnnualPowCont);
$row = mysql_fetch_array($result);
$AnnualPowCont = $row['annualPow'];
if($row['annualPow'] == 0){
	$AnnualPowCont = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlgodBruttoPrihod = "select sum(a.PercentageOfGrossIncome) as persum from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where c.idUser = " . $uid . " and d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> ''";
$result=mysql_query($sqlgodBruttoPrihod);
$row = mysql_fetch_array($result);
$godBruttoPrihod = $row['persum'];
if($row['persum'] == 0){
	$godBruttoPrihod = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlBrojBruttoPrihod = "select count(a.idProject) as Sprojekti from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where c.idUser = " . $uid . " and d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> ''";
$result=mysql_query($sqlBrojBruttoPrihod);
$row = mysql_fetch_array($result);
$BrojBruttoPrihod = $row['Sprojekti'];
if($row['Sprojekti'] == 0){
	$BrojBruttoPrihod = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlgodBruttoPrihod = "select sum(d.Commision) as persum from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where c.idUser = " . $uid . " and d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> ''";
$result=mysql_query($sqlgodBruttoPrihod);
$row = mysql_fetch_array($result);
$godBruttoProvizija = $row['persum'];
if($row['persum'] == 0){
	$godBruttoProvizija = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

if($godBruttoProvizija == 0){

	$Najamnina = 0;
}

else

{
	if($BrojBruttoPrihod == 0) {
		$BrojBruttoPrihod = 1;
	}

	$NajamninaP = (($godBruttoProvizija / $BrojBruttoPrihod) * 100);
	$NajamninaP2 = $godBruttoProvizija / $BrojBruttoPrihod;
}


//***********************************************************************************************
if($godBruttoPrihod == 0){

	$Najamnina = 0;
}

else

{
	if($BrojBruttoPrihod == 0) { $BrojBruttoPrihod = 1; }

	$Najamnina = (($godBruttoPrihod / $BrojBruttoPrihod) * 100);
$Najamnina2 = $godBruttoPrihod / $BrojBruttoPrihod;
}
//***********************************************************************************************

if($AnnualPowCont == 0){

	$PostotakProizvodnjePow = 0;
}

else

{
	if($AnnualPow == 0) { $AnnualPow = 1; }

	$PostotakProizvodnjePow = (($AnnualPowCont / $AnnualPow) * 100);

}
//***********************************************************************************************
if($MaxPowUgovoreno == 0){

	$PostotakMaxPow = 0;
}

else

{
	if($MaxPowSvi == 0) { $MaxPowSvi = 1; }

	$PostotakMaxPow = (($MaxPowUgovoreno / $MaxPowSvi) * 100);

}
//***********************************************************************************************
if($UkupnoProjekata == 0){

	$PostotakVlastitihPonuda = 0;
}

else

{
if($SviProjekti == 0) { $SviProjekti = 1; }

	$PostotakVlastitihPonuda = (($UkupnoProjekata / $SviProjekti) * 100);
	
}
//***********************************************************************************************

include_once $_SESSION['BASE_PATH']  . '/Admin/View/reportAssociateDetailsView.php';